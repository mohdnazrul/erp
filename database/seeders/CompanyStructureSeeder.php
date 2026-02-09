<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyStructureSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {

            // =========================
            // 1) ORGANISATION
            // =========================
            $org = $this->upsertOrganisation(
                name: 'SWM Environment Sdn. Bhd.',
                code: 'SWM'
            );
            $orgId = $org->id;

            // =========================
            // 2) ORG ROLES (Hierarchy)
            // CEO -> (COO/CFO/CTO/CHRO) -> Head -> Manager -> Exec -> Staff
            // =========================
            $ceo  = $this->upsertOrgRole($orgId, 'Chief Executive Officer', 'CEO', null, 1);

            $coo  = $this->upsertOrgRole($orgId, 'Chief Operating Officer', 'COO', $ceo, 2);
            $cfo  = $this->upsertOrgRole($orgId, 'Chief Financial Officer', 'CFO', $ceo, 2);
            $cto  = $this->upsertOrgRole($orgId, 'Chief Technology Officer', 'CTO', $ceo, 2);
            $chro = $this->upsertOrgRole($orgId, 'Chief Human Resources Officer', 'CHRO', $ceo, 2);

            $headOps    = $this->upsertOrgRole($orgId, 'Head of Operations', 'H-OPS', $coo, 3);
            $headFin    = $this->upsertOrgRole($orgId, 'Head of Finance', 'H-FIN', $cfo, 3);
            $headTech   = $this->upsertOrgRole($orgId, 'Head of Technology', 'H-TECH', $cto, 3);
            $headHR     = $this->upsertOrgRole($orgId, 'Head of HR', 'H-HR', $chro, 3);
            $headSales  = $this->upsertOrgRole($orgId, 'Head of Sales', 'H-SALES', $coo, 3);

            $mgrOps     = $this->upsertOrgRole($orgId, 'Operations Manager', 'M-OPS', $headOps, 4);
            $mgrFin     = $this->upsertOrgRole($orgId, 'Finance Manager', 'M-FIN', $headFin, 4);
            $mgrTech    = $this->upsertOrgRole($orgId, 'IT Manager', 'M-IT', $headTech, 4);
            $mgrHR      = $this->upsertOrgRole($orgId, 'HR Manager', 'M-HR', $headHR, 4);
            $mgrSales   = $this->upsertOrgRole($orgId, 'Sales Manager', 'M-SALES', $headSales, 4);

            $execOps    = $this->upsertOrgRole($orgId, 'Operations Executive', 'E-OPS', $mgrOps, 5);
            $execFin    = $this->upsertOrgRole($orgId, 'Finance Executive', 'E-FIN', $mgrFin, 5);
            $execTech   = $this->upsertOrgRole($orgId, 'Software Engineer', 'E-ENG', $mgrTech, 5);
            $execHR     = $this->upsertOrgRole($orgId, 'HR Executive', 'E-HR', $mgrHR, 5);
            $execSales  = $this->upsertOrgRole($orgId, 'Sales Executive', 'E-SALES', $mgrSales, 5);

            $staff      = $this->upsertOrgRole($orgId, 'Staff', 'STAFF', $execOps, 6);

            // =========================
            // 3) ORG UNITS (HQ + Branches)
            // unit_type: HQ | BRANCH | REGION
            // =========================
            $hq = $this->upsertOrgUnit($orgId, 'HQ - TTDI Kuala Lumpur', 'HQ-TTDI', 'HQ', null);

            // Regions (optional)
            $regionCentral = $this->upsertOrgUnit($orgId, 'Central Region', 'REG-CEN', 'REGION', $hq);
            $regionSouth   = $this->upsertOrgUnit($orgId, 'Southern Region', 'REG-SOU', 'REGION', $hq);
            $regionNorth   = $this->upsertOrgUnit($orgId, 'Northern Region', 'REG-NOR', 'REGION', $hq);

            // Branches under regions
            $branchKL  = $this->upsertOrgUnit($orgId, 'Branch - Kuala Lumpur', 'BR-KL', 'BRANCH', $regionCentral);
            $branchSA  = $this->upsertOrgUnit($orgId, 'Branch - Shah Alam', 'BR-SA', 'BRANCH', $regionCentral);

            $branchJB  = $this->upsertOrgUnit($orgId, 'Branch - Johor Bahru', 'BR-JB', 'BRANCH', $regionSouth);
            $branchKT  = $this->upsertOrgUnit($orgId, 'Branch - Kluang', 'BR-KLG', 'BRANCH', $regionSouth);

            $branchPG  = $this->upsertOrgUnit($orgId, 'Branch - Penang', 'BR-PG', 'BRANCH', $regionNorth);
            $branchIP  = $this->upsertOrgUnit($orgId, 'Branch - Ipoh', 'BR-IP', 'BRANCH', $regionNorth);

            // =========================
            // 4) DEPARTMENTS (per unit)
            // =========================
            // HQ Departments
            $this->seedDepartmentsForUnit($orgId, $hq, [
                ['name' => 'Technology (IT)', 'code' => 'HQ-IT'],
                ['name' => 'Finance',         'code' => 'HQ-FIN'],
                ['name' => 'Human Resources', 'code' => 'HQ-HR'],
                ['name' => 'Operations',      'code' => 'HQ-OPS'],
                ['name' => 'Sales',           'code' => 'HQ-SALES'],
                ['name' => 'Procurement',     'code' => 'HQ-PROC'],
                ['name' => 'Customer Support','code' => 'HQ-CS'],
            ]);

            // Branch Departments (same template)
            $branchTemplate = [
                ['name' => 'Operations', 'code' => null],
                ['name' => 'Sales',      'code' => null],
                ['name' => 'Admin',      'code' => null],
            ];

            foreach ([$branchKL, $branchSA, $branchJB, $branchKT, $branchPG, $branchIP] as $branchId) {
                $branchCode = DB::table('org_units')->where('id', $branchId)->value('code');

                $deptRows = array_map(function ($d) use ($branchCode) {
                    return [
                        'name' => $d['name'],
                        'code' => $branchCode.'-'.$this->slugShort($d['name']),
                    ];
                }, $branchTemplate);

                $this->seedDepartmentsForUnit($orgId, $branchId, $deptRows);
            }

            // Done
        });
    }

    // =========================
    // Helpers
    // =========================

    private function upsertOrganisation(string $name, string $code): object
    {
        DB::table('organisations')->updateOrInsert(
            ['code' => $code],
            [
                'name' => $name,
                'is_active' => true,
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );

        return DB::table('organisations')->where('code', $code)->first();
    }

    private function upsertOrgUnit(int $orgId, string $name, string $code, string $unitType, ?int $parentId): int
    {
        DB::table('org_units')->updateOrInsert(
            ['organisation_id' => $orgId, 'code' => $code],
            [
                'name' => $name,
                'unit_type' => $unitType,
                'parent_unit_id' => $parentId,
                'is_active' => true,
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );

        return (int) DB::table('org_units')
            ->where('organisation_id', $orgId)
            ->where('code', $code)
            ->value('id');
    }

    private function upsertOrgRole(int $orgId, string $name, string $code, ?int $parentId, ?int $level): int
    {
        DB::table('org_roles')->updateOrInsert(
            ['organisation_id' => $orgId, 'code' => $code],
            [
                'name' => $name,
                'parent_org_role_id' => $parentId,
                'level' => $level,
                'is_active' => true,
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );

        return (int) DB::table('org_roles')
            ->where('organisation_id', $orgId)
            ->where('code', $code)
            ->value('id');
    }

    private function seedDepartmentsForUnit(int $orgId, int $unitId, array $departments): void
    {
        foreach ($departments as $d) {
            DB::table('departments')->updateOrInsert(
                ['organisation_id' => $orgId, 'code' => $d['code']],
                [
                    'org_unit_id' => $unitId,
                    'name' => $d['name'],
                    'parent_department_id' => null,
                    'is_active' => true,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }

    private function slugShort(string $name): string
    {
        // Operations -> OPS, Human Resources -> HR, etc.
        $map = [
            'Operations' => 'OPS',
            'Sales' => 'SALES',
            'Admin' => 'ADM',
            'Technology (IT)' => 'IT',
            'Finance' => 'FIN',
            'Human Resources' => 'HR',
            'Procurement' => 'PROC',
            'Customer Support' => 'CS',
        ];

        return $map[$name] ?? strtoupper(substr(preg_replace('/[^A-Za-z]/', '', $name), 0, 4));
    }
}

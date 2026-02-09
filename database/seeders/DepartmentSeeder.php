<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\OrgUnit;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hq = OrgUnit::where('code', 'HQ')->first();

        // Create departments at HQ
        Department::create([
            'org_unit_id' => $hq->id,
            'name' => 'Human Resources',
            'code' => 'HR',
            'description' => 'Human Resources Department',
            'is_active' => true,
        ]);

        Department::create([
            'org_unit_id' => $hq->id,
            'name' => 'Information Technology',
            'code' => 'IT',
            'description' => 'IT Department',
            'is_active' => true,
        ]);

        Department::create([
            'org_unit_id' => $hq->id,
            'name' => 'Finance',
            'code' => 'FIN',
            'description' => 'Finance Department',
            'is_active' => true,
        ]);

        Department::create([
            'org_unit_id' => $hq->id,
            'name' => 'Sales',
            'code' => 'SALES',
            'description' => 'Sales Department',
            'is_active' => true,
        ]);

        Department::create([
            'org_unit_id' => $hq->id,
            'name' => 'Marketing',
            'code' => 'MKT',
            'description' => 'Marketing Department',
            'is_active' => true,
        ]);

        Department::create([
            'org_unit_id' => $hq->id,
            'name' => 'Operations',
            'code' => 'OPS',
            'description' => 'Operations Department',
            'is_active' => true,
        ]);

        // Create some departments in branches
        $northBranch = OrgUnit::where('code', 'NB')->first();
        
        Department::create([
            'org_unit_id' => $northBranch->id,
            'name' => 'Sales',
            'code' => 'NB-SALES',
            'description' => 'North Branch Sales',
            'is_active' => true,
        ]);

        Department::create([
            'org_unit_id' => $northBranch->id,
            'name' => 'Support',
            'code' => 'NB-SUP',
            'description' => 'North Branch Support',
            'is_active' => true,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Organization;
use App\Models\OrgRole;
use App\Models\OrgUnit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organization = Organization::first();
        $hq = OrgUnit::where('code', 'HQ')->first();
        $hrDept = Department::where('code', 'HR')->first();
        $itDept = Department::where('code', 'IT')->first();
        $salesDept = Department::where('code', 'SALES')->first();
        
        $ceoRole = OrgRole::where('code', 'CEO')->first();
        $deptHeadRole = OrgRole::where('code', 'DEPT_HEAD')->first();
        $staffRole = OrgRole::where('code', 'STAFF')->first();

        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'organization_id' => $organization->id,
            'org_unit_id' => $hq->id,
            'department_id' => $itDept->id,
            'org_role_id' => $ceoRole->id,
            'employee_id' => 'EMP001',
            'joined_date' => now()->subYears(5),
            'is_active' => true,
        ]);
        $admin->assignRole('super-admin');

        // Create manager user
        $manager = User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
            'organization_id' => $organization->id,
            'org_unit_id' => $hq->id,
            'department_id' => $hrDept->id,
            'org_role_id' => $deptHeadRole->id,
            'employee_id' => 'EMP002',
            'joined_date' => now()->subYears(3),
            'is_active' => true,
        ]);
        $manager->assignRole('manager');

        // Set HR department manager
        $hrDept->update(['manager_id' => $manager->id]);

        // Create employee user
        $employee = User::create([
            'name' => 'Employee User',
            'email' => 'employee@example.com',
            'password' => Hash::make('password'),
            'organization_id' => $organization->id,
            'org_unit_id' => $hq->id,
            'department_id' => $salesDept->id,
            'org_role_id' => $staffRole->id,
            'employee_id' => 'EMP003',
            'joined_date' => now()->subYear(),
            'is_active' => true,
        ]);
        $employee->assignRole('employee');
    }
}

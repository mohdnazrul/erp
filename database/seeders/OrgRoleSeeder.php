<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\OrgRole;
use Illuminate\Database\Seeder;

class OrgRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organization = Organization::first();

        // Create organizational roles (separate from system RBAC)
        OrgRole::create([
            'organization_id' => $organization->id,
            'name' => 'Chief Executive Officer',
            'code' => 'CEO',
            'description' => 'Top executive position',
            'level' => 1,
            'is_active' => true,
        ]);

        OrgRole::create([
            'organization_id' => $organization->id,
            'name' => 'Chief Operating Officer',
            'code' => 'COO',
            'description' => 'Operations executive',
            'level' => 2,
            'is_active' => true,
        ]);

        OrgRole::create([
            'organization_id' => $organization->id,
            'name' => 'Department Head',
            'code' => 'DEPT_HEAD',
            'description' => 'Head of department',
            'level' => 3,
            'is_active' => true,
        ]);

        OrgRole::create([
            'organization_id' => $organization->id,
            'name' => 'Team Lead',
            'code' => 'TEAM_LEAD',
            'description' => 'Team leader',
            'level' => 4,
            'is_active' => true,
        ]);

        OrgRole::create([
            'organization_id' => $organization->id,
            'name' => 'Senior Staff',
            'code' => 'SENIOR',
            'description' => 'Senior level staff',
            'level' => 5,
            'is_active' => true,
        ]);

        OrgRole::create([
            'organization_id' => $organization->id,
            'name' => 'Staff',
            'code' => 'STAFF',
            'description' => 'Regular staff member',
            'level' => 6,
            'is_active' => true,
        ]);

        OrgRole::create([
            'organization_id' => $organization->id,
            'name' => 'Junior Staff',
            'code' => 'JUNIOR',
            'description' => 'Junior level staff',
            'level' => 7,
            'is_active' => true,
        ]);
    }
}

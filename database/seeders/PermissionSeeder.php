<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // User management
            'view users',
            'create users',
            'edit users',
            'delete users',
            
            // Organization management
            'view organizations',
            'create organizations',
            'edit organizations',
            'delete organizations',
            
            // Department management
            'view departments',
            'create departments',
            'edit departments',
            'delete departments',
            
            // Role management
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo(Permission::all());

        $managerRole = Role::create(['name' => 'manager']);
        $managerRole->givePermissionTo([
            'view users',
            'view organizations',
            'view departments',
            'view roles',
        ]);

        $employeeRole = Role::create(['name' => 'employee']);
        $employeeRole->givePermissionTo([
            'view users',
            'view departments',
        ]);
    }
}

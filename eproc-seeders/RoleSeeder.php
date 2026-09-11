<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // 2. Create Permissions using firstOrCreate to avoid duplicates
        $permissions = [
            'create rfqs',
            'publish rfqs',
            'manage vendors',
            'manage users',
            'manage profile',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web'
            ]);
        }

        // 3. Create Roles and Assign Permissions

        // PIC Department Role
        $picRole = Role::firstOrCreate(['name' => 'low_admin', 'guard_name' => 'web']);
        $picRole->syncPermissions(['create rfqs']); // syncPermissions is safer than givePermissionTo

        // Procurement Admin Role (Changed 'admin' to match your panel logic if needed)
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $adminRole->syncPermissions(Permission::all());

        // Vendor Role
        $vendorRole = Role::firstOrCreate(['name' => 'vendor', 'guard_name' => 'web']);
        $vendorRole->syncPermissions(['manage profile']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Role::truncate();
        
        Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'writer']);
        $permission1 = Permission::create(['name' => 'add article']);
        $permission2 = Permission::create(['name' => 'edit article']);

        // METHOD 1
        $role->givePermissionTo($permission1);
        // METHOD 2
        $permission2->assignRole($role);

        //$role->syncPermissions($permissions);
        //$permission->syncRoles($roles);
        
        //$role->revokePermissionTo($permission1);
        //$permission2->removeRole($role);


    }
}

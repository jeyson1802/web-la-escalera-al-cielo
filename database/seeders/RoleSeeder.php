<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
        $role_admin = Role::create(['name' => 'Admin']);
        $role_blogger = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$role_admin, $role_blogger]);

        Permission::create(['name' => 'admin.categories.index'])->assignRole($role_admin, $role_blogger);
        Permission::create(['name' => 'admin.categories.create'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.categories.edit'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.categories.destroy'])->assignRole($role_admin);

        Permission::create(['name' => 'admin.posts.index'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.create'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.destroy'])->syncRoles([$role_admin, $role_blogger]);

        Permission::create(['name' => 'admin.users.index'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role_admin);

    }
}

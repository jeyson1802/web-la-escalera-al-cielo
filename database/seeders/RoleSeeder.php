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
        $role_documentador = Role::create(['name' => 'Documentador']);

        Permission::create(['name' => 'admin.index','description' => 'Ver Dashboard'])->syncRoles([$role_admin, $role_blogger]);

        Permission::create(['name' => 'admin.categories.index','description' => 'Ver Listado de Categorías'])->assignRole($role_admin, $role_blogger);
        Permission::create(['name' => 'admin.categories.create','description' => 'Crear Categoría'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.categories.edit','description' => 'Editar Categoría'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.categories.destroy','description' => 'Eliminar Categoría'])->assignRole($role_admin);

        Permission::create(['name' => 'admin.roles.index','description' => 'Ver Listado de Roles'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.roles.create','description' => 'Crear Rol'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.roles.edit','description' => 'Editar Rol'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.roles.destroy','description' => 'Eliminar Rol'])->assignRole($role_admin);

        Permission::create(['name' => 'admin.posts.index','description' => 'Ver Listado de Posts'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.create','description' => 'Crear Post'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.edit','description' => 'Editar Post'])->syncRoles([$role_admin, $role_blogger]);
        Permission::create(['name' => 'admin.posts.destroy','description' => 'Eliminar Post'])->syncRoles([$role_admin, $role_blogger]);

        Permission::create(['name' => 'admin.documents.index','description' => 'Ver Listado de Documentos'])->syncRoles([$role_admin, $role_documentador]);
        Permission::create(['name' => 'admin.documents.create','description' => 'Crear Documento'])->syncRoles([$role_admin, $role_documentador]);
        Permission::create(['name' => 'admin.documents.edit','description' => 'Editar Documento'])->syncRoles([$role_admin, $role_documentador]);
        Permission::create(['name' => 'admin.documents.destroy','description' => 'Eliminar Documento'])->syncRoles([$role_admin, $role_documentador]);

        Permission::create(['name' => 'admin.users.index','description' => 'Ver Listado de Usuarios'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.users.edit','description' => 'Editar Usuario'])->assignRole($role_admin);

    }
}

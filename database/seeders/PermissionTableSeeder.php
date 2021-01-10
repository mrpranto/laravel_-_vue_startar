<?php

namespace Database\Seeders;

use App\Models\Admin\Module;
use App\Models\Admin\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moduleId = Module::query()->updateOrCreate([
            'name' => 'Access Dashboard',
        ])->id;

        Permission::query()->updateOrCreate([
            'module_id' => $moduleId,
            'name' => 'Access Dashboard',
            'slug' => 'app.access_dashboard'
        ]);


        $roleModuleId = Module::query()->updateOrCreate([
            'name' => 'Role Management',
        ])->id;

        Permission::query()->updateOrCreate([
            'module_id' => $roleModuleId,
            'name' => 'Access Role',
            'slug' => 'app.roles.index'
        ]);

        Permission::query()->updateOrCreate([
            'module_id' => $roleModuleId,
            'name' => 'Create Role',
            'slug' => 'app.roles.create'
        ]);

        Permission::query()->updateOrCreate([
            'module_id' => $roleModuleId,
            'name' => 'Edit Role',
            'slug' => 'app.roles.edit'
        ]);


        Permission::query()->updateOrCreate([
            'module_id' => $roleModuleId,
            'name' => 'Delete Role',
            'slug' => 'app.roles.destroy'
        ]);



        $userModuleId = Module::query()->updateOrCreate([
            'name' => 'User Management',
        ])->id;

        Permission::query()->updateOrCreate([
            'module_id' => $userModuleId,
            'name' => 'Access User',
            'slug' => 'app.users.index'
        ]);

        Permission::query()->updateOrCreate([
            'module_id' => $userModuleId,
            'name' => 'Create User',
            'slug' => 'app.users.create'
        ]);


        Permission::query()->updateOrCreate([
            'module_id' => $userModuleId,
            'name' => 'Edit User',
            'slug' => 'app.users.edit'
        ]);

        Permission::query()->updateOrCreate([
            'module_id' => $userModuleId,
            'name' => 'Delete User',
            'slug' => 'app.users.destroy'
        ]);

    }
}

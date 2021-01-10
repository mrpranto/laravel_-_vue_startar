<?php

namespace Database\Seeders;

use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermissions = Permission::query()->pluck('id');

        Role::query()->updateOrCreate([

            'name' => 'Admin',
            'slug' => 'admin',
            'note' => 'This is for admin role, You Can\'t Delete it',
            'deleteable' => false

        ])->permissions()
            ->sync($adminPermissions);

        Role::query()->updateOrCreate([

            'name' => 'User',
            'slug' => 'user',
            'note' => 'This is for admin role, You Can\'t Delete it',
            'deleteable' => false

        ]);

    }
}

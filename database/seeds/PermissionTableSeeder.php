<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'scholarship-list',
            'scholarship-create',
            'scholarship-edit',
            'scholarship-delete',
            'project-list',
            'project-create',
            'project-edit',
            'project-delete',
            'general-list',
            'general-create',
            'general-edit',
            'general-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

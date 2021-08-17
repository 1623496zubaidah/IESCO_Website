<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
 
    
  public function run(){
    $user = User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => bcrypt('123456')
    ]);

    $role = Role::create(['name' => 'Admin']);

    $permissions = Permission::all();

    $role->syncPermissions($permissions);

    $user->assignRole($role);
  }
}
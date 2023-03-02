<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
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
            'admin',
            'staff',
            'user'
         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }

         $role = Role::create(['name' => 'Admin']);
         $role->givePermissionTo('admin');

         $role = Role::create(['name' => 'Staff']);
         $role->givePermissionTo('staff');

         $role = Role::create(['name' => 'User']);
         $role->givePermissionTo('user');
    }
}

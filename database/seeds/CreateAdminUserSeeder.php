<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'lastname' => 'Administrator',
            'firstname' => 'Admin',
            'mi' => 'A',
        	'email' => 'administrator@gmail.com',
            'username' => 'administrator',
        	'password' => bcrypt('password')
        ]);

        $user->assignRole('Admin');
    }
}

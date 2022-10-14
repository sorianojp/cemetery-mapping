<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'lastname' => 'Doe',
            'firstname' => 'John',
            'mi' => 'D',
        	'email' => 'doe@gmail.com',
        	'password' => bcrypt('password')
        ]);

        $user->assignRole('Staff');
    }
}

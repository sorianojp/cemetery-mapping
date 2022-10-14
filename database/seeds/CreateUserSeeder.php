<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'lastname' => 'Dela Cruz',
            'firstname' => 'Juan',
            'mi' => 'D',
        	'email' => 'delacruz@gmail.com',
        	'password' => bcrypt('password')
        ]);

        $user->assignRole('User');
    }
}

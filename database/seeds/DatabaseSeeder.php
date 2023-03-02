<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            CreateStaffSeeder::class,
            CreateUserSeeder::class,
            CreateLotSeeder::class,
            CreateSectorSeeder::class
        ]);
    }
}

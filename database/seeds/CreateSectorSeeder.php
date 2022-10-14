<?php

use Illuminate\Database\Seeder;
use App\Sector;

class CreateSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lot1 = [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G'
         ];

         foreach ($lot1 as $data) {
              Sector::create(['name' => $data, 'lot_id' => '1']);
         }

         $lot2 = [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H'
         ];

         foreach ($lot2 as $data) {
              Sector::create(['name' => $data, 'lot_id' => '2']);
         }


         $lot3 = [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H',
            'I'
         ];

         foreach ($lot3 as $data) {
              Sector::create(['name' => $data, 'lot_id' => '3']);
         }



         $lot4 = [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H',
            'I'
         ];

         foreach ($lot4 as $data) {
              Sector::create(['name' => $data, 'lot_id' => '4']);
         }
    }
}

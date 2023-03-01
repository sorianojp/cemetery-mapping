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
            'EMERALD',
            'RUBY',
            'GARNET',
            'AMETHYST',
            'DIAMOND 1',
            'DIAMOND 2',
            'PEARL',
            'OPAL'
         ];

         foreach ($lot1 as $data) {
              Sector::create(['name' => $data, 'lot_id' => '1']);
         }

         $lot2 = [
            'CITRINE',
            'SAPPHIRE',
            'PERIDOT',
            'TOPAZ'
         ];

         foreach ($lot2 as $data) {
              Sector::create(['name' => $data, 'lot_id' => '2']);
         }


         $lot3 = [
            'ZIRCON',
            'ONYX',
            'ALEXANDRITE',
            'SARDONYX',
            'AQUAMARINE',
            'TURQUOISE',
            'TOURMALINE',
            'MOONSTONE'
         ];

         foreach ($lot3 as $data) {
              Sector::create(['name' => $data, 'lot_id' => '3']);
         }

    }
}

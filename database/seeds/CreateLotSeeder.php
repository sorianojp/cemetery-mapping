<?php

use Illuminate\Database\Seeder;
use App\Lot;

class CreateLotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lots = [
            'LOT 1',
            'LOT 2',
            'LOT 3',
            'LOT 4'
         ];

         foreach ($lots as $lot) {
              Lot::create(['name' => $lot]);
         }
    }
}

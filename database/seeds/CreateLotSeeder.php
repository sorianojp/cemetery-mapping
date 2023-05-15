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
            'PHASE 1',
         ];

         foreach ($lots as $lot) {
              Lot::create(['name' => $lot]);
         }
    }
}

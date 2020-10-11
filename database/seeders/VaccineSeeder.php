<?php

namespace Database\Seeders;

use App\Models\Official;
use App\Models\Vaccine;
use App\Models\Vvc;
use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carnets=Vvc::all();
        $carnets->each(function($carnet){
            Vaccine::factory(6)->create([
                'vvc_id'=>$carnet->id
            ]);
        });
    }
}

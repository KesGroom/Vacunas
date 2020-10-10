<?php

namespace Database\Seeders;

use App\Models\Official;
use App\Models\User;
use App\Models\Vvc;
use Illuminate\Database\Seeder;

class VVCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vvc = new Vvc();

        $vvc->id = User::where('NIP', '1007228390')->first()->NIP;
        $vvc->scanned_image = "Imagen registro";
        $vvc->no_civil_registry = "1000012";
        $vvc->gender = "Masculino";
        $vvc->weight = "15kg";
        $vvc->name_responsible = "Milton Sanchez";
        $vvc->address_responsible = "Cra 8 #48i -49 SUR";
        $vvc->city_responsible = "Bogotá";
        $vvc->institution_name = "Hospital Santa Juanita";
        $vvc->official_id = Official::where('id', '1007228390')->first()->id;
        $vvc->save();
    }
}

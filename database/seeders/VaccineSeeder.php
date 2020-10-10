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
        $vaccine = new Vaccine();

        $vaccine->vvc_id = Vvc::where('id', '1007228390')->first()->id;
        $vaccine->official_id = Official::where('id', '1007228390')->first()->id;
        $vaccine->age_patient = 2;
        $vaccine->name_vaccine = "Anti Pendejil";
        $vaccine->dose_vaccine = "50ml";
        $vaccine->application_date = "2001-05-02";
        $vaccine->laboratory = "Drogas Pepe";
        $vaccine->batch_number = 1124;
        $vaccine->IPS = "Doña Juana";
        $vaccine->reinforcement = "2005-05-02";
        $vaccine->save();
    }
}

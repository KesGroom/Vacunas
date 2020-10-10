<?php

namespace Database\Seeders;

use App\Models\Eps;
use Illuminate\Database\Seeder;

class EPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eps = new Eps();
        $eps->name = "Famisanar";
        $eps->address = "En narnia";
        $eps->phone= "7715544";
        $eps->code_access= "EPS884569";
        $eps->password = "Famisanar123";

        $eps->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Eps;
use App\Models\Official;
use App\Models\User;
use Illuminate\Database\Seeder;

class OfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $official = new Official();

        $official->id = User::where('NIP', '1007228390')->first()->NIP;
        $official->email = "kesgroom@gmail.com";
        $official->password = "Kesito080117";
        $official->phone = "3133734481";
        $official->address = "Cra 8 #48i - 49 SUR";
        $official->profession = "Doctor";
        $official->position = "Jefe";
        $official->eps_id = Eps::all()->random()->id;
        $official->save();
    }
}

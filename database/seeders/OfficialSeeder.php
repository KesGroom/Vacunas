<?php

namespace Database\Seeders;

use App\Models\Eps;
use App\Models\Official;
use App\Models\User;
use Database\Factories\OfficialFactory;
use Faker\Factory;
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
        //Se crea un Funcionario propio para realizar pruebas
        $official = new Official();

        $official->id = User::where('id', '1007228390')->first()->id;
        $official->email = "kesgroom@gmail.com";
        $official->password = bcrypt('Kesito080117');
        $official->phone = "3133734481";
        $official->address = "Cra 8 #48i - 49 SUR";
        $official->profession = "Doctor(a)";
        $official->position = "Jefe";
        $official->eps_id = Eps::all()->random()->id;
        $official->save();

        //Se genera 1 funcionario por cada usuario
        $users = User::where('id','like','%16%')->get();

        $users->each(function($user){
            Official::factory(1)->create([
                'id'=>$user->id
            ]);
        });

    }
}

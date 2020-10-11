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
        $users = User::all();

        $users->each(function($user){
            Vvc::factory(1)->create([
                'id'=> $user->id
            ]);
        });
    }
}

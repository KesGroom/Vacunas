<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = "1007228390";
        $user->name = "Kevin Esteven";
        $user->lastname = "Sanchez Gomez";
        $user->date_of_birth = "1999-08-01";
        $user->document_type = "CC";
        $user->save();
    }
}

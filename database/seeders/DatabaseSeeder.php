<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(EPSSeeder::class);
        $this->call(UserSeeder::class);      
        $this->call(OfficialSeeder::class);
        $this->call(VVCSeeder::class);
        $this->call(VaccineSeeder::class);        
    }
}

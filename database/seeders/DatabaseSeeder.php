<?php

namespace Database\Seeders;

use App\Models\Eps;
use App\Models\Official;
use App\Models\User;
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

        Eps::factory(15)->create();
        User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(OfficialSeeder::class);
        $this->call(VVCSeeder::class);
        $this->call(VaccineSeeder::class);
    }
}

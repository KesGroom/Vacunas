<?php

namespace Database\Factories;

use App\Models\Official;
use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

class VaccineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vaccine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sel = $this->faker->numerify('#');
        if($sel>5){
            $date = $this->faker->date(); 
        }else{
            $date = null;
        }
        
        return [
            "official_id" => Official::all()->random()->id,
            "age_patient" => $this->faker->numerify('##'),
            "name_vaccine" => $this->faker->sentence(3),
            "dose_vaccine" => $this->faker->numerify('##ml'),
            "application_date" => $this->faker->date(),
            "laboratory" => $this->faker->company,
            "batch_number" => $this->faker->numerify('####'),
            "IPS" => $this->faker->company,
            "reinforcement" => $date
        ];
    }
}

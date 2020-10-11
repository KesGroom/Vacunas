<?php

namespace Database\Factories;

use App\Models\Official;
use App\Models\VVC;
use Illuminate\Database\Eloquent\Factories\Factory;

class VVCFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VVC::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $state= $this->faker->randomElement(['Cundinamarca', 'Nariño', 'Cauca', 'Antioquia']);
        switch($state){
            case 'Cundinamarca':
                $city = $this->faker->randomElement(['Bogotá', 'Soacha', 'Mosquera']);
            break;
            case 'Nariño':
                $city = $this->faker->randomElement(['Pasto', 'Tumaco', 'Ipliales']);
            break;
            case 'Cauca':
                $city = $this->faker->randomElement(['Popayan', 'Cajibío', 'Inza']);
            break;
            case 'Antioquia':
                $city = $this->faker->randomElement(['Medellín', 'Rionegro', 'Bello']);
            break;
        }
        return [
            "scanned_image" => "Imagen escaneada",
            "no_civil_registry" => $this->faker->unique()->numerify("########"),
            "gender" => $this->faker->randomElement(['Masculino','Femenino']),
            "weight" => $this->faker->numerify("1#kg"),
            "name_responsible" => $this->faker->name,
            "address_responsible" => $this->faker->streetAddress,
            "city_responsible" => $city,
            "institution_name" => $this->faker->company,
            "official_id" => Official::all()->random()->id
        ];
    }
}

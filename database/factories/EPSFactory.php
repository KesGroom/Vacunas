<?php

namespace Database\Factories;

use App\Models\EPS;
use Illuminate\Database\Eloquent\Factories\Factory;

class EPSFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EPS::class;

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
            "name" => $this->faker->company,
            "address" => $this->faker->streetAddress,
            "phone"=> $this->faker->numerify("##########"),
            "code_access"=> $this->faker->unique()->numerify("EPS######"),
            "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "state"=> $state,
            "city"=>$city
        ];
    }
}

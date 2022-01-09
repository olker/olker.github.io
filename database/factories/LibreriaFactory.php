<?php

namespace Database\Factories;

use App\Models\libreria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class LibreriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = libreria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $array = ['storage/imagenes/1631911410.jpg','storage/imagenes/logo1.jpg','storage/imagenes/logo2.jpg','storage/imagenes/logo3.jpg'];
        $array_nombre =['one piece','hunter x hunter','clannad'];
        $array_genero =['shonen','drama','meca','psicologico'];
        return [
            'nombre' => $this->faker->randomElement($array_nombre),
            'genero' => $this->faker->randomElement($array_genero),
            'imagen' => $this->faker->randomElement($array),
            'doblaje' => $this->faker->randomElement(['español latino','japones','ingles']),
            'subtitulado' => $this->faker->randomElement(['español latino','japones','ingles']),
            'descripcion' => $this->faker->text(),
            'disco' => $this->faker->numberBetween(1, 10),
            'peso' => 25.25,
            'tipo' =>$this->faker->randomElement(['pelicula','serie','anime']),
            'user_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}

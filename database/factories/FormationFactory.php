<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       /* return ['nomformation' => $this->faker->paragraph,
            'datedebut' => $this->faker->dateTimeThisYear,
            'duree' => $this->faker->numberBetween(1, 500),
            'unite' => $this->faker->text(10),
            'idcategorie' => $this->faker->numberBetween(1, 1000000) //
        ];*/
        return ['nomformation' => $this->faker->paragraph( ),
         'datedebut' => $this->faker->dateTimeThisYear,
         'duree' => $this->faker->numberBetween(1, 500),
         'unite' => $this->faker->text(10),
         ];
    }
}

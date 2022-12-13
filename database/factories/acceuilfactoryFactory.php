<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class acceuilfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_club' => $this->faker->paragraph( ),
            'email_club' => $this->faker->paragraph( ),
            'mdp_club' => $this->faker->paragraph( ),
            'effectif' => $this->faker->text(22),
            'annonce_publie' => $this->faker->text(100),
        ];
    }
}


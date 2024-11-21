<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonnement>
 */
class AbonnementFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        return [
            'nom' => $this->faker->randomElement(["Spotify", "Netflix", "Amazon Prime", "Basic Fit", "Canal+", "Disney+", "Playstation plus"]),
            'mensualite' => $this->faker->numberBetween(5, 100),
            'date_mensualite' => $this->faker->date(),
            'id_user' => $this->faker->numberBetween(1, User::query()->count()),
        ];
    }

}

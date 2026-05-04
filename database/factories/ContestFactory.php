<?php

namespace Database\Factories;

use App\Models\Contest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contest>
 */
class ContestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => 1,
            'category' => $this->faker->word(),
            'organizer' => $this->faker->company(),
            'description' => $this->faker->sentence(),
            'scoring_type' => $this->faker->randomElement(['point_based_single', 'point_based_mutliple', 'rank_based_single', 'rank_based_multiple']),
            'contest_type' => $this->faker->randomElement(['individual', 'team']),
            'gender_category' => 'male&female',
            'date' => now(),
            'venue' => $this->faker->address(),
            'poster' => ''
        ];
    }
}

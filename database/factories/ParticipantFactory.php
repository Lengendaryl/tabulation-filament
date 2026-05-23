<?php

namespace Database\Factories;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contest_id' => 1,
            'participant' => [
                "age" => 21,
                "image" => "",
                "first_name" => $this->faker->firstName(),
                "last_name" => $this->faker->lastName(),
                "gender" => $this->faker->randomElement(['male', 'female']),
                "participant_no" => $this->faker->unique()->numberBetween(1, 12),
            ]
        ];
    }

    public function male(): static
    {
        return $this->state(fn(array $attributes) => [
            'participant' => array_merge($attributes['participant'], [
                "image" => "",
                "age" => 21,
                'gender' => 'male',
                'first_name' => $this->faker->firstName('male'),
                "last_name" => $this->faker->lastName(),
                "participant_no" => $this->faker->unique()->numberBetween(1, 6)
            ]),
        ]);
    }

    public function female(): static
    {
        return $this->state(fn(array $attributes) => [
            'participant' => array_merge($attributes['participant'], [
                "image" => "",
                "age" => 21,
                'gender' => 'female',
                'first_name' => $this->faker->firstName('female'),
                "last_name" => $this->faker->lastName(),
                "participant_no" => $this->faker->unique()->numberBetween(1, 6)
            ]),
        ]);
    }
}

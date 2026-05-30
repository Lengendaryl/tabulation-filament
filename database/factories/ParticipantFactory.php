<?php

namespace Database\Factories;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Participant>
 */
class ParticipantFactory extends Factory
{
    // Keep track of counts dynamically across states
    protected static int $participantNo = 1;
    protected static int $femaleNo = 1;
    protected static int $maleNo = 1;

    /**
     * Define the model's default state.
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
                // Automatically increments: 1, 2, 3, 4... up to 12 safely
                "participant_no" => self::$participantNo++,
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
                // Increments independently for males: 1, 2, 3... 6
                "participant_no" => self::$maleNo++
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
                // Increments independently for females: 1, 2, 3... 6
                "participant_no" => self::$femaleNo++
            ]),
        ]);
    }
}

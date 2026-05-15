<?php

namespace Database\Factories;

use App\Models\JudgesGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JudgesGroup>
 */
class JudgesGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'criteria_id' => 1,
            ''
        ];
    }
}

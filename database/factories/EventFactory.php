<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'poster' => '',
            'name' => 'Test Event Name',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor',
            'date' => now(),
            'organizer' => 'Test Organizer',
            'venue' => 'Test Venue',
            'address' => 'Test Address',
        ];
    }
}

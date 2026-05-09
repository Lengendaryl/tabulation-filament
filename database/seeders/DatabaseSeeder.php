<?php

namespace Database\Seeders;

use App\Models\Contest;
use App\Models\Criteria;
use App\Models\Event;
use App\Models\Participant;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory()->create([
        //     'name' => 'Admin User',
        //     'email' => 'darylsumabal123@gmail.com',
        //     'password' => bcrypt('asdasdasd'),
        // ]);

        // User::factory(2)->create();

        // Event::factory()->create();

        // Contest::factory()->create();

        // Criteria::factory()->create();

        Participant::factory()->count(5)->male()->create();

        Participant::factory()->count(5)->female()->create();
    }
}

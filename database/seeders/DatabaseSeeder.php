<?php

namespace Database\Seeders;

use App\Models\Contest;
use App\Models\Criteria;
use App\Models\Event;
use App\Models\JudgesGroup;
use App\Models\Participant;
use App\Models\Role;
use App\Models\Score;
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

        // User::factory(4)->create();
        User::factory()
            ->count(4)
            ->sequence(
                [
                    'no' => 1,
                    'position' => 'Judge',
                ],
                [
                    'no' => 2,
                    'position' => 'Judge',
                ],
                [
                    'no' => 3,
                    'position' => 'Judge',
                ],
                [
                    'no' => null,
                    'position' => 'Chairman of the Board of Judges',
                ],
            )
            ->create();

        Event::factory()->create();

        Contest::factory()->create();

        Criteria::factory()->create();

        JudgesGroup::factory()->create();

        // Participant::factory()->count(6)->team()->create();

        Participant::factory()->count(6)->male()->create();

        Participant::factory()->count(6)->female()->create();

        Score::factory()->scoreCreate();
    }
}

<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [];
    }


    public function scoreCreate()
    {
        //JUDGE 2
        // Score::factory()->create(
        //     [
        //         'judge_id' => 2,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Production Number',
        //         'level' => 'preliminary',
        //         'score' => [
        //             [
        //                 "rank" => 3,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "33",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 1,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Romaguera",
        //                         "first_name" => "Giovanni",
        //                         "participant_no" => 1
        //                     ]
        //                 ],
        //                 "total_score" => 85,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 1,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 6,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "32",
        //                     "delivery-of-introduction" => "20"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 2,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Spinka",
        //                         "first_name" => "Pete",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 82,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 2,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "16",
        //                     "audience-impact" => "14",
        //                     "mastery-of-choreography" => "33",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Pfeffer",
        //                         "first_name" => "Bertha",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 85,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "18",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "37",
        //                     "delivery-of-introduction" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 4,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Auer",
        //                         "first_name" => "Zane",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 91,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 4,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "16",
        //                     "audience-impact" => "14",
        //                     "mastery-of-choreography" => "33",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Langosh",
        //                         "first_name" => "Allen",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 85,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "16",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "33",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 6,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Green",
        //                         "first_name" => "Noah",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 84,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 6,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "18",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "34",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 7,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Kilback",
        //                         "first_name" => "Madge",
        //                         "participant_no" => 1
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 7,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 3.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "33",
        //                     "delivery-of-introduction" => "21"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 8,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Bruen",
        //                         "first_name" => "Annalise",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 84,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 8,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "16",
        //                     "audience-impact" => "14",
        //                     "mastery-of-choreography" => "32",
        //                     "delivery-of-introduction" => "21"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 9,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Cronin",
        //                         "first_name" => "Leola",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 83,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 9,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 3.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "32",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Murray",
        //                         "first_name" => "Abigayle",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 84,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "16",
        //                     "audience-impact" => "14",
        //                     "mastery-of-choreography" => "35",
        //                     "delivery-of-introduction" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Gulgowski",
        //                         "first_name" => "Mariah",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 88,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 6,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "16",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "32",
        //                     "delivery-of-introduction" => "21"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 12,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Jacobs",
        //                         "first_name" => "Chloe",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 82,
        //                 "submitted_at" => "2026-06-06 10=>57=>52",
        //                 "participant_id" => 12,
        //                 "contest_category" => "Production Number"
        //             ]
        //         ]
        //     ]
        // );
        // //JUDGE 2
        // Score::factory()->create([
        //     'judge_id' => 2,
        //     'contest_id' => 1,
        //     'criteria_id' => 1,
        //     'contest_category' => 'Tropical Attire',
        //     'level' => 'preliminary',
        //     'score' => [
        //         [
        //             "rank" => 5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "22",
        //                 "costume-creativity" => "30",
        //                 "beauty-and-charisma" => "21"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 1,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Romaguera",
        //                     "first_name" => "Giovanni",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 85,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 1,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "14",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 2,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Spinka",
        //                     "first_name" => "Pete",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 93,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 2,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "21",
        //                 "costume-creativity" => "31",
        //                 "beauty-and-charisma" => "20"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 3,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Pfeffer",
        //                     "first_name" => "Bertha",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 84,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 3,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 4,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "21",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "21"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 4,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Auer",
        //                     "first_name" => "Zane",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 86,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 4,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "13",
        //                 "poise-and-bearing" => "21",
        //                 "costume-creativity" => "31",
        //                 "beauty-and-charisma" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 5,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Langosh",
        //                     "first_name" => "Allen",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 87,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 5,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 2,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "14",
        //                 "poise-and-bearing" => "21",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 6,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Green",
        //                     "first_name" => "Noah",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 90,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 6,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 2,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "21",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 7,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Kilback",
        //                     "first_name" => "Madge",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 89,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 7,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "13",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 8,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Bruen",
        //                     "first_name" => "Annalise",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 92,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 8,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "21",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "20"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 9,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Cronin",
        //                     "first_name" => "Leola",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 85,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 9,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 4,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "22",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 10,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Murray",
        //                     "first_name" => "Abigayle",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 88,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 10,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 4,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "21",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 11,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Gulgowski",
        //                     "first_name" => "Mariah",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 88,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 11,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 4,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "21",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 2,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 12,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Jacobs",
        //                     "first_name" => "Chloe",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 88,
        //             "submitted_at" => "2026-06-06 11=>11=>57",
        //             "participant_id" => 12,
        //             "contest_category" => "Tropical Attire"
        //         ]
        //     ]
        // ]);
        // //JUDGE 2
        // Score::factory()->create(
        //     [
        //         'judge_id' => 2,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Casual Interview',
        //         'level' => 'preliminary',
        //         'score' => [
        //             [
        //                 "rank" => 6,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "15",
        //                     "stage-presence" => "20",
        //                     "wit-and-content" => "25",
        //                     "projection-and-delivery" => "20"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 1,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Romaguera",
        //                         "first_name" => "Giovanni",
        //                         "participant_no" => 1
        //                     ]
        //                 ],
        //                 "total_score" => 80,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 1,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 3.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "16",
        //                     "stage-presence" => "22",
        //                     "wit-and-content" => "27",
        //                     "projection-and-delivery" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 2,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Spinka",
        //                         "first_name" => "Pete",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 2,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 3.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "stage-presence" => "21",
        //                     "wit-and-content" => "27",
        //                     "projection-and-delivery" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Pfeffer",
        //                         "first_name" => "Bertha",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "stage-presence" => "20",
        //                     "wit-and-content" => "25",
        //                     "projection-and-delivery" => "21"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 4,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Auer",
        //                         "first_name" => "Zane",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 83,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 4,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "18",
        //                     "stage-presence" => "22",
        //                     "wit-and-content" => "27",
        //                     "projection-and-delivery" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Langosh",
        //                         "first_name" => "Allen",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 90,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "18",
        //                     "stage-presence" => "23",
        //                     "wit-and-content" => "26",
        //                     "projection-and-delivery" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 6,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Green",
        //                         "first_name" => "Noah",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 89,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 6,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "stage-presence" => "22",
        //                     "wit-and-content" => "26",
        //                     "projection-and-delivery" => "21"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 7,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Kilback",
        //                         "first_name" => "Madge",
        //                         "participant_no" => 1
        //                     ]
        //                 ],
        //                 "total_score" => 86,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 7,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "18",
        //                     "stage-presence" => "22",
        //                     "wit-and-content" => "25",
        //                     "projection-and-delivery" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 8,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Bruen",
        //                         "first_name" => "Annalise",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 8,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "stage-presence" => "20",
        //                     "wit-and-content" => "25",
        //                     "projection-and-delivery" => "20"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 9,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Cronin",
        //                         "first_name" => "Leola",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 82,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 9,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 4,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "stage-presence" => "21",
        //                     "wit-and-content" => "26",
        //                     "projection-and-delivery" => "21"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Murray",
        //                         "first_name" => "Abigayle",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 85,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "18",
        //                     "stage-presence" => "22",
        //                     "wit-and-content" => "26",
        //                     "projection-and-delivery" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Gulgowski",
        //                         "first_name" => "Mariah",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 88,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Casual Interview"
        //             ],
        //             [
        //                 "rank" => 6,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "17",
        //                     "stage-presence" => "20",
        //                     "wit-and-content" => "22",
        //                     "projection-and-delivery" => "20"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 12,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Jacobs",
        //                         "first_name" => "Chloe",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 79,
        //                 "submitted_at" => "2026-06-06 11=>03=>01",
        //                 "participant_id" => 12,
        //                 "contest_category" => "Casual Interview"
        //             ]
        //         ]
        //     ]
        // );

        // //JUDGE 3
        // Score::factory()->create(
        //     [
        //         'judge_id' => 3,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Production Number',
        //         'level' => 'preliminary',
        //         'score' => [
        //             [
        //                 "rank" => 4.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "12",
        //                     "mastery-of-choreography" => "34",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 1,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Romaguera",
        //                         "first_name" => "Giovanni",
        //                         "participant_no" => 1
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 1,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 4.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "14",
        //                     "mastery-of-choreography" => "31",
        //                     "delivery-of-introduction" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 2,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Spinka",
        //                         "first_name" => "Pete",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 2,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "14",
        //                     "mastery-of-choreography" => "38",
        //                     "delivery-of-introduction" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Pfeffer",
        //                         "first_name" => "Bertha",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "12",
        //                     "mastery-of-choreography" => "35",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 4,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Auer",
        //                         "first_name" => "Zane",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 88,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 4,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "15",
        //                     "mastery-of-choreography" => "34",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Langosh",
        //                         "first_name" => "Allen",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 90,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 6,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "10",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "34",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 6,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Green",
        //                         "first_name" => "Noah",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 79,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 6,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "12",
        //                     "mastery-of-choreography" => "33",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 7,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Kilback",
        //                         "first_name" => "Madge",
        //                         "participant_no" => 1
        //                     ]
        //                 ],
        //                 "total_score" => 86,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 7,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "14",
        //                     "mastery-of-choreography" => "35",
        //                     "delivery-of-introduction" => "24"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 8,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Bruen",
        //                         "first_name" => "Annalise",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 92,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 8,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "14",
        //                     "mastery-of-choreography" => "31",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 9,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Cronin",
        //                         "first_name" => "Leola",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 86,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 9,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "12",
        //                     "mastery-of-choreography" => "32",
        //                     "delivery-of-introduction" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Murray",
        //                         "first_name" => "Abigayle",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 86,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "15",
        //                     "mastery-of-choreography" => "35",
        //                     "delivery-of-introduction" => "22"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Gulgowski",
        //                         "first_name" => "Mariah",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 91,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Production Number"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "overall-impact" => "19",
        //                     "audience-impact" => "13",
        //                     "mastery-of-choreography" => "35",
        //                     "delivery-of-introduction" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 12,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Jacobs",
        //                         "first_name" => "Chloe",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 90,
        //                 "submitted_at" => "2026-06-06 11=>04=>31",
        //                 "participant_id" => 12,
        //                 "contest_category" => "Production Number"
        //             ]
        //         ]
        //     ],
        // );
        // //JUDGE 3
        // Score::factory()->create([
        //     'judge_id' => 3,
        //     'contest_id' => 1,
        //     'criteria_id' => 1,
        //     'contest_category' => 'Tropical Attire',
        //     'level' => 'preliminary',
        //     'score' => [
        //         [
        //             "rank" => 4,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "13",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 1,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Romaguera",
        //                     "first_name" => "Giovanni",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 91,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 1,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "22",
        //                 "costume-creativity" => "31",
        //                 "beauty-and-charisma" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 2,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Spinka",
        //                     "first_name" => "Pete",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 87,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 2,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 2,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "13",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 3,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Pfeffer",
        //                     "first_name" => "Bertha",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 93,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 3,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "31",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 4,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Auer",
        //                     "first_name" => "Zane",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 89,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 4,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "13",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "25"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 5,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Langosh",
        //                     "first_name" => "Allen",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 94,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 5,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "13",
        //                 "poise-and-bearing" => "24",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 6,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Green",
        //                     "first_name" => "Noah",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 92,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 6,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 3.5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 7,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Kilback",
        //                     "first_name" => "Madge",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 89,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 7,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "13",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 8,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Bruen",
        //                     "first_name" => "Annalise",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 92,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 8,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "11",
        //                 "poise-and-bearing" => "22",
        //                 "costume-creativity" => "32",
        //                 "beauty-and-charisma" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 9,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Cronin",
        //                     "first_name" => "Leola",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 87,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 9,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 3.5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "31",
        //                 "beauty-and-charisma" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 10,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Murray",
        //                     "first_name" => "Abigayle",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 89,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 10,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 2,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "12",
        //                 "poise-and-bearing" => "23",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 11,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Gulgowski",
        //                     "first_name" => "Mariah",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 90,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 11,
        //             "contest_category" => "Tropical Attire"
        //         ],
        //         [
        //             "rank" => 5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "stage-presence" => "11",
        //                 "poise-and-bearing" => "22",
        //                 "costume-creativity" => "33",
        //                 "beauty-and-charisma" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 12,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Jacobs",
        //                     "first_name" => "Chloe",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 88,
        //             "submitted_at" => "2026-06-06 11=>05=>22",
        //             "participant_id" => 12,
        //             "contest_category" => "Tropical Attire"
        //         ]
        //     ]
        // ]);
        // //JUDGE 3
        // Score::factory()->create([
        //     'judge_id' => 3,
        //     'contest_id' => 1,
        //     'criteria_id' => 1,
        //     'contest_category' => 'Casual Interview',
        //     'level' => 'preliminary',
        //     'score' => [
        //         [
        //             "rank" => 5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "25",
        //                 "projection-and-delivery" => "20"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 1,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Romaguera",
        //                     "first_name" => "Giovanni",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 85,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 1,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 4,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "26",
        //                 "projection-and-delivery" => "21"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 2,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Spinka",
        //                     "first_name" => "Pete",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 86,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 2,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "18",
        //                 "stage-presence" => "24",
        //                 "wit-and-content" => "29",
        //                 "projection-and-delivery" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 3,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Pfeffer",
        //                     "first_name" => "Bertha",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 95,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 3,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "16",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "23",
        //                 "projection-and-delivery" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 4,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Auer",
        //                     "first_name" => "Zane",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 84,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 4,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "25",
        //                 "projection-and-delivery" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 5,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Langosh",
        //                     "first_name" => "Allen",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 87,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 5,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 2,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "18",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "29",
        //                 "projection-and-delivery" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 6,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Green",
        //                     "first_name" => "Noah",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 94,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 6,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "25",
        //                 "projection-and-delivery" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 7,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Kilback",
        //                     "first_name" => "Madge",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 86,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 7,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "18",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "29",
        //                 "projection-and-delivery" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 8,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Bruen",
        //                     "first_name" => "Annalise",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 94,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 8,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 4,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "27",
        //                 "projection-and-delivery" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 9,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Cronin",
        //                     "first_name" => "Leola",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 88,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 9,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 2,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "28",
        //                 "projection-and-delivery" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 10,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Murray",
        //                     "first_name" => "Abigayle",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 92,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 10,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "28",
        //                 "projection-and-delivery" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 11,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Gulgowski",
        //                     "first_name" => "Mariah",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 90,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 11,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "15",
        //                 "stage-presence" => "21",
        //                 "wit-and-content" => "23",
        //                 "projection-and-delivery" => "21"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 3,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 12,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Jacobs",
        //                     "first_name" => "Chloe",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 80,
        //             "submitted_at" => "2026-06-06 11=>06=>22",
        //             "participant_id" => 12,
        //             "contest_category" => "Casual Interview"
        //         ]
        //     ]
        // ]);

        // //JUDGE 4
        // Score::factory()->create([
        //     'judge_id' => 4,
        //     'contest_id' => 1,
        //     'criteria_id' => 1,
        //     'contest_category' => 'Production Number',
        //     'level' => 'preliminary',
        //     'score' => [
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "20",
        //                 "audience-impact" => "14",
        //                 "mastery-of-choreography" => "39",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 1,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Romaguera",
        //                     "first_name" => "Giovanni",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 97,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 1,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "20",
        //                 "audience-impact" => "13",
        //                 "mastery-of-choreography" => "37",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 2,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Spinka",
        //                     "first_name" => "Pete",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 94,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 2,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "audience-impact" => "13",
        //                 "mastery-of-choreography" => "39",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 3,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Pfeffer",
        //                     "first_name" => "Bertha",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 95,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 3,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "20",
        //                 "audience-impact" => "13",
        //                 "mastery-of-choreography" => "38",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 4,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Auer",
        //                     "first_name" => "Zane",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 95,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 4,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "audience-impact" => "13",
        //                 "mastery-of-choreography" => "36",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 5,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Langosh",
        //                     "first_name" => "Allen",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 92,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 5,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "audience-impact" => "14",
        //                 "mastery-of-choreography" => "38",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 6,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Green",
        //                     "first_name" => "Noah",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 95,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 6,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "audience-impact" => "13",
        //                 "mastery-of-choreography" => "38",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 7,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Kilback",
        //                     "first_name" => "Madge",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 94,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 7,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 5.5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "audience-impact" => "13",
        //                 "mastery-of-choreography" => "37",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 8,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Bruen",
        //                     "first_name" => "Annalise",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 93,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 8,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 5.5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "audience-impact" => "13",
        //                 "mastery-of-choreography" => "37",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 9,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Cronin",
        //                     "first_name" => "Leola",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 93,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 9,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "20",
        //                 "audience-impact" => "13",
        //                 "mastery-of-choreography" => "39",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 10,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Murray",
        //                     "first_name" => "Abigayle",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 96,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 10,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "audience-impact" => "14",
        //                 "mastery-of-choreography" => "37",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 11,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Gulgowski",
        //                     "first_name" => "Mariah",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 94,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 11,
        //             "contest_category" => "Production Number"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "audience-impact" => "14",
        //                 "mastery-of-choreography" => "37",
        //                 "delivery-of-introduction" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 12,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Jacobs",
        //                     "first_name" => "Chloe",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 94,
        //             "submitted_at" => "2026-06-06 11=>07=>48",
        //             "participant_id" => 12,
        //             "contest_category" => "Production Number"
        //         ]
        //     ]
        // ]);
        // //JUDGE 4
        // Score::factory()->create(
        //     [
        //         'judge_id' => 4,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Tropical Attire',
        //         'level' => 'preliminary',
        //         'score' => [
        //             [
        //                 "rank" => 4,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "14",
        //                     "poise-and-bearing" => "24",
        //                     "costume-creativity" => "33",
        //                     "beauty-and-charisma" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 1,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Romaguera",
        //                         "first_name" => "Giovanni",
        //                         "participant_no" => 1
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 1,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "14",
        //                     "poise-and-bearing" => "24",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "24"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 2,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Spinka",
        //                         "first_name" => "Pete",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 96,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 2,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 4,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "14",
        //                     "poise-and-bearing" => "24",
        //                     "costume-creativity" => "33",
        //                     "beauty-and-charisma" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Pfeffer",
        //                         "first_name" => "Bertha",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 6,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "14",
        //                     "poise-and-bearing" => "24",
        //                     "costume-creativity" => "32",
        //                     "beauty-and-charisma" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 4,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Auer",
        //                         "first_name" => "Zane",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 93,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 4,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 4,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "13",
        //                     "poise-and-bearing" => "23",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "24"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Langosh",
        //                         "first_name" => "Allen",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "14",
        //                     "poise-and-bearing" => "24",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "25"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 6,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Green",
        //                         "first_name" => "Noah",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 97,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 6,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 5.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "13",
        //                     "poise-and-bearing" => "22",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 7,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Kilback",
        //                         "first_name" => "Madge",
        //                         "participant_no" => 1
        //                     ]
        //                 ],
        //                 "total_score" => 92,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 7,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "14",
        //                     "poise-and-bearing" => "24",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "24"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 8,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Bruen",
        //                         "first_name" => "Annalise",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 96,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 8,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 3.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "13",
        //                     "poise-and-bearing" => "23",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 9,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Cronin",
        //                         "first_name" => "Leola",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 93,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 9,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "14",
        //                     "poise-and-bearing" => "23",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "24"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Murray",
        //                         "first_name" => "Abigayle",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 95,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 3.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "13",
        //                     "poise-and-bearing" => "23",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Gulgowski",
        //                         "first_name" => "Mariah",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 93,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Tropical Attire"
        //             ],
        //             [
        //                 "rank" => 5.5,
        //                 "level" => "preliminary",
        //                 "scores" => [
        //                     "stage-presence" => "13",
        //                     "poise-and-bearing" => "22",
        //                     "costume-creativity" => "34",
        //                     "beauty-and-charisma" => "23"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 12,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Jacobs",
        //                         "first_name" => "Chloe",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 92,
        //                 "submitted_at" => "2026-06-06 11=>08=>37",
        //                 "participant_id" => 12,
        //                 "contest_category" => "Tropical Attire"
        //             ]
        //         ]
        //     ]
        // );
        // //JUDGE 4
        // Score::factory()->create([
        //     'judge_id' => 4,
        //     'contest_id' => 1,
        //     'criteria_id' => 1,
        //     'contest_category' => 'Casual Interview',
        //     'level' => 'preliminary',
        //     'score' => [
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "18",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "25",
        //                 "projection-and-delivery" => "20"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 1,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Romaguera",
        //                     "first_name" => "Giovanni",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 86,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 1,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 3.5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "28",
        //                 "projection-and-delivery" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 2,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Spinka",
        //                     "first_name" => "Pete",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 93,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 2,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 2,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "29",
        //                 "projection-and-delivery" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 3,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Pfeffer",
        //                     "first_name" => "Bertha",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 95,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 3,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "29",
        //                 "projection-and-delivery" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 4,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Auer",
        //                     "first_name" => "Zane",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 92,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 4,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 3.5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "19",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "28",
        //                 "projection-and-delivery" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 5,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Langosh",
        //                     "first_name" => "Allen",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 93,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 5,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "20",
        //                 "stage-presence" => "24",
        //                 "wit-and-content" => "29",
        //                 "projection-and-delivery" => "25"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 6,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "male",
        //                     "last_name" => "Green",
        //                     "first_name" => "Noah",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 98,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 6,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 4.5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "18",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "25",
        //                 "projection-and-delivery" => "20"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 7,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Kilback",
        //                     "first_name" => "Madge",
        //                     "participant_no" => 1
        //                 ]
        //             ],
        //             "total_score" => 85,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 7,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 2,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "18",
        //                 "stage-presence" => "23",
        //                 "wit-and-content" => "28",
        //                 "projection-and-delivery" => "23"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 8,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Bruen",
        //                     "first_name" => "Annalise",
        //                     "participant_no" => 2
        //                 ]
        //             ],
        //             "total_score" => 92,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 8,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 4.5,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "25",
        //                 "projection-and-delivery" => "21"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 9,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Cronin",
        //                     "first_name" => "Leola",
        //                     "participant_no" => 3
        //                 ]
        //             ],
        //             "total_score" => 85,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 9,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 1,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "18",
        //                 "stage-presence" => "24",
        //                 "wit-and-content" => "28",
        //                 "projection-and-delivery" => "24"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 10,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Murray",
        //                     "first_name" => "Abigayle",
        //                     "participant_no" => 4
        //                 ]
        //             ],
        //             "total_score" => 94,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 10,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 3,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "18",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "26",
        //                 "projection-and-delivery" => "22"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 11,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Gulgowski",
        //                     "first_name" => "Mariah",
        //                     "participant_no" => 5
        //                 ]
        //             ],
        //             "total_score" => 88,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 11,
        //             "contest_category" => "Casual Interview"
        //         ],
        //         [
        //             "rank" => 6,
        //             "level" => "preliminary",
        //             "scores" => [
        //                 "overall-impact" => "17",
        //                 "stage-presence" => "22",
        //                 "wit-and-content" => "24",
        //                 "projection-and-delivery" => "21"
        //             ],
        //             "criteria" => 1,
        //             "judge_id" => 4,
        //             "contest_id" => 1,
        //             "participant" => [
        //                 "id" => 12,
        //                 "contest_id" => 1,
        //                 "created_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "updated_at" => "2026-06-06T02=>42=>21.000000Z",
        //                 "participant" => [
        //                     "age" => 21,
        //                     "image" => "",
        //                     "gender" => "female",
        //                     "last_name" => "Jacobs",
        //                     "first_name" => "Chloe",
        //                     "participant_no" => 6
        //                 ]
        //             ],
        //             "total_score" => 84,
        //             "submitted_at" => "2026-06-06 11=>09=>38",
        //             "participant_id" => 12,
        //             "contest_category" => "Casual Interview"
        //         ]
        //     ]

        // ]);

        // //FINAL
        // //JUDGE 2
        // Score::factory()->create(
        //     [
        //         'judge_id' => 2,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Final Round',
        //         'level' => 'final',
        //         'score' =>   [
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "24",
        //                     "beauty-and-poise" => "30",
        //                     "wit-and-intelligence" => "29"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Schuster",
        //                         "first_name" => "Oscar",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 83,
        //                 "submitted_at" => "2026-06-06 14=>53=>18",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "26",
        //                     "beauty-and-poise" => "32",
        //                     "wit-and-intelligence" => "28"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Runolfsdottir",
        //                         "first_name" => "Christ",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 86,
        //                 "submitted_at" => "2026-06-06 14=>53=>18",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "26",
        //                     "beauty-and-poise" => "33",
        //                     "wit-and-intelligence" => "29"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 6,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Conn",
        //                         "first_name" => "Ansel",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 88,
        //                 "submitted_at" => "2026-06-06 14=>53=>18",
        //                 "participant_id" => 6,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "26",
        //                     "beauty-and-poise" => "34",
        //                     "wit-and-intelligence" => "31"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 8,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Witting",
        //                         "first_name" => "Petra",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 91,
        //                 "submitted_at" => "2026-06-06 14=>53=>18",
        //                 "participant_id" => 8,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "25",
        //                     "beauty-and-poise" => "31",
        //                     "wit-and-intelligence" => "30"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Rice",
        //                         "first_name" => "Connie",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 86,
        //                 "submitted_at" => "2026-06-06 14=>53=>18",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "27",
        //                     "beauty-and-poise" => "32",
        //                     "wit-and-intelligence" => "33"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Rath",
        //                         "first_name" => "Roselyn",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 92,
        //                 "submitted_at" => "2026-06-06 14=>53=>18",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Final Round"
        //             ]
        //         ]
        //     ]
        // );
        // //JUDGE 3
        // Score::factory()->create(
        //     [
        //         'judge_id' => 3,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Final Round',
        //         'level' => 'final',
        //         'score' => [
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "27",
        //                     "beauty-and-poise" => "33",
        //                     "wit-and-intelligence" => "31"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Schuster",
        //                         "first_name" => "Oscar",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 91,
        //                 "submitted_at" => "2026-06-06 14=>55=>33",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "26",
        //                     "beauty-and-poise" => "33",
        //                     "wit-and-intelligence" => "31"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Runolfsdottir",
        //                         "first_name" => "Christ",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 90,
        //                 "submitted_at" => "2026-06-06 14=>55=>33",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "25",
        //                     "beauty-and-poise" => "32",
        //                     "wit-and-intelligence" => "30"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 6,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Conn",
        //                         "first_name" => "Ansel",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-06 14=>55=>33",
        //                 "participant_id" => 6,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "27",
        //                     "beauty-and-poise" => "34",
        //                     "wit-and-intelligence" => "34"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 8,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Witting",
        //                         "first_name" => "Petra",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 95,
        //                 "submitted_at" => "2026-06-06 14=>55=>33",
        //                 "participant_id" => 8,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "27",
        //                     "beauty-and-poise" => "33",
        //                     "wit-and-intelligence" => "33"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Rice",
        //                         "first_name" => "Connie",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 93,
        //                 "submitted_at" => "2026-06-06 14=>55=>33",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "27",
        //                     "beauty-and-poise" => "35",
        //                     "wit-and-intelligence" => "32"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Rath",
        //                         "first_name" => "Roselyn",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-06 14=>55=>33",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Final Round"
        //             ]
        //         ]
        //     ]
        // );
        // //JUDGE 4
        // Score::factory()->create(
        //     [
        //         'judge_id' => 4,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Final Round',
        //         'level' => 'final',
        //         'score' =>  [
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "25",
        //                     "beauty-and-poise" => "32",
        //                     "wit-and-intelligence" => "30"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Schuster",
        //                         "first_name" => "Oscar",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-06 14=>56=>28",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "27",
        //                     "beauty-and-poise" => "32",
        //                     "wit-and-intelligence" => "35"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Runolfsdottir",
        //                         "first_name" => "Christ",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-06 14=>56=>28",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "26",
        //                     "beauty-and-poise" => "32",
        //                     "wit-and-intelligence" => "30"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 6,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Conn",
        //                         "first_name" => "Ansel",
        //                         "participant_no" => 6
        //                     ]
        //                 ],
        //                 "total_score" => 88,
        //                 "submitted_at" => "2026-06-06 14=>56=>28",
        //                 "participant_id" => 6,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "30",
        //                     "beauty-and-poise" => "32",
        //                     "wit-and-intelligence" => "35"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 8,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Witting",
        //                         "first_name" => "Petra",
        //                         "participant_no" => 2
        //                     ]
        //                 ],
        //                 "total_score" => 97,
        //                 "submitted_at" => "2026-06-06 14=>56=>28",
        //                 "participant_id" => 8,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "28",
        //                     "beauty-and-poise" => "32",
        //                     "wit-and-intelligence" => "32"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Rice",
        //                         "first_name" => "Connie",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 92,
        //                 "submitted_at" => "2026-06-06 14=>56=>28",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "overall-impact" => "27",
        //                     "beauty-and-poise" => "31",
        //                     "wit-and-intelligence" => "32"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "updated_at" => "2026-06-06T04=>26=>30.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Rath",
        //                         "first_name" => "Roselyn",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 90,
        //                 "submitted_at" => "2026-06-06 14=>56=>28",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Final Round"
        //             ]
        //         ]
        //     ]
        // );

        //JUDGE 2
        Score::factory()->create(
            [
                'judge_id' => 2,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Production Number',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "34",
                            "mastery-and-delivery-of-the-introduction" => "42"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Reinger",
                                "first_name" => "Zakary",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 84,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 1,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "34",
                            "mastery-and-delivery-of-the-introduction" => "41"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hirthe",
                                "first_name" => "Fritz",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 83,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 2,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "36",
                            "mastery-and-delivery-of-the-introduction" => "41"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Simonis",
                                "first_name" => "Nickolas",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 85,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 3,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "39",
                            "mastery-and-delivery-of-the-introduction" => "46"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Kshlerin",
                                "first_name" => "Billy",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 4,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "39",
                            "mastery-and-delivery-of-the-introduction" => "45"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Lebsack",
                                "first_name" => "Hester",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 5,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "35",
                            "mastery-and-delivery-of-the-introduction" => "42"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Torp",
                                "first_name" => "Payton",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 85,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 6,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "36",
                            "mastery-and-delivery-of-the-introduction" => "42"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rosenbaum",
                                "first_name" => "Francesca",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 86,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 7,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "38",
                            "mastery-and-delivery-of-the-introduction" => "46"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Labadie",
                                "first_name" => "Constance",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 8,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "38",
                            "mastery-and-delivery-of-the-introduction" => "45"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rippin",
                                "first_name" => "Deanna",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 9,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "37",
                            "mastery-and-delivery-of-the-introduction" => "46"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Davis",
                                "first_name" => "Nona",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 10,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "37",
                            "mastery-and-delivery-of-the-introduction" => "45"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Stoltenberg",
                                "first_name" => "Crystel",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 11,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "36",
                            "mastery-and-delivery-of-the-introduction" => "42"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Baumbach",
                                "first_name" => "Fleta",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 86,
                        "submitted_at" => "2026-06-04 17=>11=>03",
                        "participant_id" => 12,
                        "contest_category" => "Production Number"
                    ]
                ]
            ]
        );
        //JUDGE 2
        Score::factory()->create([
            'judge_id' => 2,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Swimwear Competition',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "24",
                        "execution" => "25",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 84,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 1,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "23",
                        "execution" => "25",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 81,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 2,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "execution" => "26",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 3,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "29",
                        "execution" => "27",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "29"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 4,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "execution" => "29",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 5,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "execution" => "27",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 6,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "execution" => "26",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 84,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 7,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "execution" => "27",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 8,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "execution" => "26",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 9,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "execution" => "27",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 10,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "execution" => "27",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 11,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "execution" => "26",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => "2026-06-04 17=>15=>52",
                    "participant_id" => 12,
                    "contest_category" => "Swimwear Competition"
                ]
            ]
        ]);
        //JUDGE 2
        Score::factory()->create(
            [
                'judge_id' => 2,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Casual Interview',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "47",
                            "audience-impact" => "8",
                            "sincerity-grace-under-pressure" => "37"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Reinger",
                                "first_name" => "Zakary",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 1,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 5.5,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "7",
                            "sincerity-grace-under-pressure" => "36"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hirthe",
                                "first_name" => "Fritz",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 2,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "48",
                            "audience-impact" => "8",
                            "sincerity-grace-under-pressure" => "36"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Simonis",
                                "first_name" => "Nickolas",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 3,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "48",
                            "audience-impact" => "8",
                            "sincerity-grace-under-pressure" => "37"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Kshlerin",
                                "first_name" => "Billy",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 4,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "49",
                            "audience-impact" => "9",
                            "sincerity-grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Lebsack",
                                "first_name" => "Hester",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 96,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 5,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 5.5,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "7",
                            "sincerity-grace-under-pressure" => "36"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Torp",
                                "first_name" => "Payton",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 6,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "43",
                            "audience-impact" => "6",
                            "sincerity-grace-under-pressure" => "34"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rosenbaum",
                                "first_name" => "Francesca",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 83,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 7,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "44",
                            "audience-impact" => "6",
                            "sincerity-grace-under-pressure" => "35"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Labadie",
                                "first_name" => "Constance",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 85,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 8,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "7",
                            "sincerity-grace-under-pressure" => "37"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rippin",
                                "first_name" => "Deanna",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 9,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "47",
                            "audience-impact" => "8",
                            "sincerity-grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Davis",
                                "first_name" => "Nona",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 10,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "9",
                            "sincerity-grace-under-pressure" => "37"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Stoltenberg",
                                "first_name" => "Crystel",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 11,
                        "contest_category" => "Casual Interview"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "content" => "45",
                            "audience-impact" => "7",
                            "sincerity-grace-under-pressure" => "36"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Baumbach",
                                "first_name" => "Fleta",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => "2026-06-04 17=>17=>33",
                        "participant_id" => 12,
                        "contest_category" => "Casual Interview"
                    ]
                ]
            ]
        );
        //JUDGE 2
        Score::factory()->create(
            [
                'judge_id' => 2,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Formal Wear',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "26",
                            "elegance" => "26",
                            "audience-impact" => "7",
                            "poise-and-bearing" => "25"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Reinger",
                                "first_name" => "Zakary",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 84,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 1,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "25",
                            "elegance" => "25",
                            "audience-impact" => "7",
                            "poise-and-bearing" => "25"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hirthe",
                                "first_name" => "Fritz",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 82,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 2,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "28",
                            "elegance" => "27",
                            "audience-impact" => "8",
                            "poise-and-bearing" => "27"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Simonis",
                                "first_name" => "Nickolas",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 3,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "28",
                            "elegance" => "26",
                            "audience-impact" => "9",
                            "poise-and-bearing" => "26"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Kshlerin",
                                "first_name" => "Billy",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 4,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "27",
                            "elegance" => "28",
                            "audience-impact" => "9",
                            "poise-and-bearing" => "28"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Lebsack",
                                "first_name" => "Hester",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 5,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "26",
                            "elegance" => "27",
                            "audience-impact" => "7",
                            "poise-and-bearing" => "26"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Torp",
                                "first_name" => "Payton",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 86,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 6,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 2.5,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "28",
                            "elegance" => "28",
                            "audience-impact" => "8",
                            "poise-and-bearing" => "28"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rosenbaum",
                                "first_name" => "Francesca",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 7,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "27",
                            "elegance" => "27",
                            "audience-impact" => "7",
                            "poise-and-bearing" => "26"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Labadie",
                                "first_name" => "Constance",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 8,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "29",
                            "elegance" => "28",
                            "audience-impact" => "8",
                            "poise-and-bearing" => "28"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rippin",
                                "first_name" => "Deanna",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 9,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 2.5,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "28",
                            "elegance" => "28",
                            "audience-impact" => "9",
                            "poise-and-bearing" => "27"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Davis",
                                "first_name" => "Nona",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 10,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "27",
                            "elegance" => "27",
                            "audience-impact" => "8",
                            "poise-and-bearing" => "26"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Stoltenberg",
                                "first_name" => "Crystel",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 11,
                        "contest_category" => "Formal Wear"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "27",
                            "elegance" => "27",
                            "audience-impact" => "9",
                            "poise-and-bearing" => "27"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Baumbach",
                                "first_name" => "Fleta",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 17=>22=>29",
                        "participant_id" => 12,
                        "contest_category" => "Formal Wear"
                    ]
                ]
            ]
        );

        //JUDGE 3
        Score::factory()->create(
            [
                'judge_id' => 3,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Production Number',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "34",
                            "mastery-and-delivery-of-the-introduction" => "43"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Reinger",
                                "first_name" => "Zakary",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 1,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "32",
                            "mastery-and-delivery-of-the-introduction" => "40"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hirthe",
                                "first_name" => "Fritz",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 82,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 2,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "35",
                            "mastery-and-delivery-of-the-introduction" => "44"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Simonis",
                                "first_name" => "Nickolas",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 3,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "35",
                            "mastery-and-delivery-of-the-introduction" => "45"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Kshlerin",
                                "first_name" => "Billy",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 4,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "36",
                            "mastery-and-delivery-of-the-introduction" => "46"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Lebsack",
                                "first_name" => "Hester",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 5,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "34",
                            "mastery-and-delivery-of-the-introduction" => "45"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Torp",
                                "first_name" => "Payton",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 6,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "36",
                            "mastery-and-delivery-of-the-introduction" => "42"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rosenbaum",
                                "first_name" => "Francesca",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 7,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "38",
                            "mastery-and-delivery-of-the-introduction" => "47"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Labadie",
                                "first_name" => "Constance",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 8,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "37",
                            "mastery-and-delivery-of-the-introduction" => "46"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rippin",
                                "first_name" => "Deanna",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 9,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "35",
                            "mastery-and-delivery-of-the-introduction" => "45"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Davis",
                                "first_name" => "Nona",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 10,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "35",
                            "mastery-and-delivery-of-the-introduction" => "42"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Stoltenberg",
                                "first_name" => "Crystel",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 11,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "32",
                            "mastery-and-delivery-of-the-introduction" => "40"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Baumbach",
                                "first_name" => "Fleta",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 82,
                        "submitted_at" => "2026-06-04 17=>29=>56",
                        "participant_id" => 12,
                        "contest_category" => "Production Number"
                    ]
                ]
            ],
        );
        //JUDGE 3
        Score::factory()->create([
            'judge_id' => 3,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Swimwear Competition',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "execution" => "25",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 1,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "24",
                        "execution" => "23",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "24"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 80,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 2,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "execution" => "27",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 3,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "execution" => "25",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 4,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "execution" => "25",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 5,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "execution" => "25",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 6,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "24",
                        "execution" => "24",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "23"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 80,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 7,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "execution" => "26",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "24"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 8,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "execution" => "24",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "23"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 81,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 9,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "execution" => "25",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 10,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "execution" => "25",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "24"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 83,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 11,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "24",
                        "execution" => "26",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "23"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 82,
                    "submitted_at" => "2026-06-04 17=>31=>20",
                    "participant_id" => 12,
                    "contest_category" => "Swimwear Competition"
                ]
            ]
        ]);
        //JUDGE 3
        Score::factory()->create([
            'judge_id' => 3,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Casual Interview',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 2.5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "46",
                        "audience-impact" => "10",
                        "sincerity-grace-under-pressure" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 1,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "42",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "33"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 84,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 2,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "43",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "34"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 3,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 2.5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "45",
                        "audience-impact" => "10",
                        "sincerity-grace-under-pressure" => "36"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 4,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "47",
                        "audience-impact" => "10",
                        "sincerity-grace-under-pressure" => "37"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 5,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "46",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 6,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "38",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "31"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 77,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 7,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "40",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "32"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 80,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 8,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "44",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "34"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 9,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "45",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 10,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "42",
                        "audience-impact" => "10",
                        "sincerity-grace-under-pressure" => "34"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 11,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "39",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "32"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 79,
                    "submitted_at" => "2026-06-04 17=>37=>12",
                    "participant_id" => 12,
                    "contest_category" => "Casual Interview"
                ]
            ]
        ]);
        //JUDGE 3
        Score::factory()->create([
            'judge_id' => 3,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Formal Wear',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "28",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 1,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "23",
                        "elegance" => "24",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 81,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 2,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "elegance" => "27",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 3,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "26",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 4,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "elegance" => "24",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 5,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "24",
                        "elegance" => "24",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 82,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 6,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "elegance" => "26",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 7,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 5.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "23",
                        "elegance" => "23",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 80,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 8,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 5.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "24",
                        "elegance" => "24",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "23"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 80,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 9,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "elegance" => "25",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 10,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "24",
                        "elegance" => "24",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 83,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 11,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "elegance" => "27",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => "2026-06-04 17=>40=>22",
                    "participant_id" => 12,
                    "contest_category" => "Formal Wear"
                ]
            ]
        ]);

        //JUDGE 4
        Score::factory()->create([
            'judge_id' => 4,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Production Number',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "7",
                        "confidence-and-beauty" => "30",
                        "mastery-and-delivery-of-the-introduction" => "38"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 75,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 1,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "7",
                        "confidence-and-beauty" => "30",
                        "mastery-and-delivery-of-the-introduction" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 72,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 2,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "10",
                        "confidence-and-beauty" => "38",
                        "mastery-and-delivery-of-the-introduction" => "45"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 3,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "10",
                        "confidence-and-beauty" => "38",
                        "mastery-and-delivery-of-the-introduction" => "42"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 4,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "8",
                        "confidence-and-beauty" => "30",
                        "mastery-and-delivery-of-the-introduction" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 73,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 5,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "6",
                        "confidence-and-beauty" => "30",
                        "mastery-and-delivery-of-the-introduction" => "32"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 68,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 6,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "7",
                        "confidence-and-beauty" => "30",
                        "mastery-and-delivery-of-the-introduction" => "38"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 75,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 7,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "7",
                        "confidence-and-beauty" => "30",
                        "mastery-and-delivery-of-the-introduction" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 72,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 8,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "10",
                        "confidence-and-beauty" => "38",
                        "mastery-and-delivery-of-the-introduction" => "45"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 9,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "10",
                        "confidence-and-beauty" => "38",
                        "mastery-and-delivery-of-the-introduction" => "42"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 10,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "8",
                        "confidence-and-beauty" => "30",
                        "mastery-and-delivery-of-the-introduction" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 73,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 11,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "audience-impact" => "6",
                        "confidence-and-beauty" => "30",
                        "mastery-and-delivery-of-the-introduction" => "32"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 68,
                    "submitted_at" => "2026-06-04 18=>37=>14",
                    "participant_id" => 12,
                    "contest_category" => "Production Number"
                ]
            ]
        ]);
        //JUDGE 4
        Score::factory()->create(
            [
                'judge_id' => 4,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Swimwear Competition',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "25",
                            "execution" => "27",
                            "audience-impact" => "10",
                            "poise-and-bearing" => "28"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Reinger",
                                "first_name" => "Zakary",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 1,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "22",
                            "execution" => "25",
                            "audience-impact" => "7",
                            "poise-and-bearing" => "24"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hirthe",
                                "first_name" => "Fritz",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 78,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 2,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "24",
                            "execution" => "25",
                            "audience-impact" => "7",
                            "poise-and-bearing" => "24"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Simonis",
                                "first_name" => "Nickolas",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 80,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 3,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "28",
                            "execution" => "27",
                            "audience-impact" => "10",
                            "poise-and-bearing" => "27"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Kshlerin",
                                "first_name" => "Billy",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 4,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "25",
                            "execution" => "25",
                            "audience-impact" => "8",
                            "poise-and-bearing" => "26"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Lebsack",
                                "first_name" => "Hester",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 84,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 5,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "25",
                            "execution" => "28",
                            "audience-impact" => "8",
                            "poise-and-bearing" => "25"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Torp",
                                "first_name" => "Payton",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 86,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 6,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "24",
                            "execution" => "25",
                            "audience-impact" => "7",
                            "poise-and-bearing" => "24"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rosenbaum",
                                "first_name" => "Francesca",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 80,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 7,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "25",
                            "execution" => "25",
                            "audience-impact" => "7",
                            "poise-and-bearing" => "26"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Labadie",
                                "first_name" => "Constance",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 83,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 8,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "27",
                            "execution" => "25",
                            "audience-impact" => "8",
                            "poise-and-bearing" => "27"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rippin",
                                "first_name" => "Deanna",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 9,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "25",
                            "execution" => "26",
                            "audience-impact" => "9",
                            "poise-and-bearing" => "24"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Davis",
                                "first_name" => "Nona",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 84,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 10,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "23",
                            "execution" => "25",
                            "audience-impact" => "9",
                            "poise-and-bearing" => "25"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Stoltenberg",
                                "first_name" => "Crystel",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 82,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 11,
                        "contest_category" => "Swimwear Competition"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "beauty" => "25",
                            "execution" => "27",
                            "audience-impact" => "8",
                            "poise-and-bearing" => "26"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Baumbach",
                                "first_name" => "Fleta",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 86,
                        "submitted_at" => "2026-06-04 18=>38=>47",
                        "participant_id" => 12,
                        "contest_category" => "Swimwear Competition"
                    ]
                ]
            ]
        );
        //JUDGE 4
        Score::factory()->create([
            'judge_id' => 4,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Casual Interview',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "42",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 1,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "38",
                        "audience-impact" => "7",
                        "sincerity-grace-under-pressure" => "30"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 75,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 2,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "38",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "30"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 76,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 3,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "36",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "33"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 78,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 4,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "45",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "38"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 5,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "30",
                        "audience-impact" => "7",
                        "sincerity-grace-under-pressure" => "29"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 66,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 6,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "37",
                        "audience-impact" => "7",
                        "sincerity-grace-under-pressure" => "34"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 78,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 7,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "37",
                        "audience-impact" => "7",
                        "sincerity-grace-under-pressure" => "32"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 76,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 8,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "40",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "34"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 82,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 9,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "42",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 10,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "39",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "36"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 84,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 11,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "40",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 83,
                    "submitted_at" => "2026-06-04 18=>40=>25",
                    "participant_id" => 12,
                    "contest_category" => "Casual Interview"
                ]
            ]

        ]);
        //JUDGE 4
        Score::factory()->create([
            'judge_id' => 4,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Formal Wear',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "elegance" => "28",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 1,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "elegance" => "25",
                        "audience-impact" => "5",
                        "poise-and-bearing" => "23"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 78,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 2,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "elegance" => "26",
                        "audience-impact" => "7",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 3,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "elegance" => "27",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 4,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "25",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 5,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "elegance" => "25",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 83,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 6,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "27",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 7,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "25",
                        "audience-impact" => "6",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 83,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 8,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "elegance" => "27",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 9,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "27",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 10,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "elegance" => "26",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 11,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "27",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 18=>41=>29",
                    "participant_id" => 12,
                    "contest_category" => "Formal Wear"
                ]
            ]
        ]);

        //JUDGE 5
        Score::factory()->create(
            [
                'judge_id' => 5,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Production Number',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 5.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "36",
                            "mastery-and-delivery-of-the-introduction" => "48"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Reinger",
                                "first_name" => "Zakary",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 1,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "9",
                            "confidence-and-beauty" => "35",
                            "mastery-and-delivery-of-the-introduction" => "48"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hirthe",
                                "first_name" => "Fritz",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 2,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "38",
                            "mastery-and-delivery-of-the-introduction" => "47"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Simonis",
                                "first_name" => "Nickolas",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 3,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "40",
                            "mastery-and-delivery-of-the-introduction" => "48"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Kshlerin",
                                "first_name" => "Billy",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 98,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 4,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "40",
                            "mastery-and-delivery-of-the-introduction" => "49"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Lebsack",
                                "first_name" => "Hester",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 99,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 5,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "38",
                            "mastery-and-delivery-of-the-introduction" => "48"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Torp",
                                "first_name" => "Payton",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 96,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 6,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "39",
                            "mastery-and-delivery-of-the-introduction" => "48"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rosenbaum",
                                "first_name" => "Francesca",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 7,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "9",
                            "confidence-and-beauty" => "37",
                            "mastery-and-delivery-of-the-introduction" => "48"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Labadie",
                                "first_name" => "Constance",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 8,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "8",
                            "confidence-and-beauty" => "36",
                            "mastery-and-delivery-of-the-introduction" => "47"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Rippin",
                                "first_name" => "Deanna",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 9,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "37",
                            "mastery-and-delivery-of-the-introduction" => "48"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Davis",
                                "first_name" => "Nona",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 10,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "38",
                            "mastery-and-delivery-of-the-introduction" => "49"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Stoltenberg",
                                "first_name" => "Crystel",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 97,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 11,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "audience-impact" => "10",
                            "confidence-and-beauty" => "38",
                            "mastery-and-delivery-of-the-introduction" => "48"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T07=>57=>36.000000Z",
                            "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Baumbach",
                                "first_name" => "Fleta",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 96,
                        "submitted_at" => "2026-06-04 18=>53=>47",
                        "participant_id" => 12,
                        "contest_category" => "Production Number"
                    ]
                ]

            ]
        );
        //JUDGE 5
        Score::factory()->create([
            'judge_id' => 5,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Swimwear Competition',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "execution" => "28",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 1,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "execution" => "28",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 2,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "execution" => "28",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 3,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "30",
                        "execution" => "29",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "30"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 99,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 4,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "29",
                        "execution" => "30",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "29"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 98,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 5,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "execution" => "30",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 95,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 6,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 1.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "execution" => "28",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "30"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 95,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 7,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "execution" => "27",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 8,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "execution" => "26",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 9,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 1.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "29",
                        "execution" => "28",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "29"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 95,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 10,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "execution" => "28",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 11,
                    "contest_category" => "Swimwear Competition"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "execution" => "28",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => "2026-06-04 18=>54=>59",
                    "participant_id" => 12,
                    "contest_category" => "Swimwear Competition"
                ]
            ]
        ]);
        //JUDGE 5
        Score::factory()->create([
            'judge_id' => 5,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Casual Interview',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "47",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "38"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 1,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "46",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "37"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 2,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 2.5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "49",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "38"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 96,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 3,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "48",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "37"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 4,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "50",
                        "audience-impact" => "10",
                        "sincerity-grace-under-pressure" => "39"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 99,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 5,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 2.5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "49",
                        "audience-impact" => "9",
                        "sincerity-grace-under-pressure" => "38"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 96,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 6,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "44",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "36"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 7,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "46",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "35"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 8,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "47",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "36"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 9,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "47",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "37"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 10,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "50",
                        "audience-impact" => "10",
                        "sincerity-grace-under-pressure" => "38"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 98,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 11,
                    "contest_category" => "Casual Interview"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "content" => "49",
                        "audience-impact" => "8",
                        "sincerity-grace-under-pressure" => "37"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => "2026-06-04 18=>57=>05",
                    "participant_id" => 12,
                    "contest_category" => "Casual Interview"
                ]
            ]
        ]);
        //JUDGE 5
        Score::factory()->create([
            'judge_id' => 5,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Formal Wear',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "29",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Reinger",
                            "first_name" => "Zakary",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 1,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "25",
                        "elegance" => "26",
                        "audience-impact" => "8",
                        "poise-and-bearing" => "26"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hirthe",
                            "first_name" => "Fritz",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 2,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "elegance" => "27",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "25"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Simonis",
                            "first_name" => "Nickolas",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 3,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 1.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "elegance" => "28",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Kshlerin",
                            "first_name" => "Billy",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 4,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 1.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "elegance" => "28",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Lebsack",
                            "first_name" => "Hester",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 5,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "elegance" => "28",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Torp",
                            "first_name" => "Payton",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 6,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "elegance" => "26",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "29"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rosenbaum",
                            "first_name" => "Francesca",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 7,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "26",
                        "elegance" => "25",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Labadie",
                            "first_name" => "Constance",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 8,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 1.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "29",
                        "elegance" => "30",
                        "audience-impact" => "9",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Rippin",
                            "first_name" => "Deanna",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 95,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 9,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 1.5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "elegance" => "29",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Davis",
                            "first_name" => "Nona",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 95,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 10,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "27",
                        "elegance" => "27",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "27"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Stoltenberg",
                            "first_name" => "Crystel",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 11,
                    "contest_category" => "Formal Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "beauty" => "28",
                        "elegance" => "28",
                        "audience-impact" => "10",
                        "poise-and-bearing" => "28"
                    ],
                    "criteria" => 1,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => "2026-06-04T07=>57=>36.000000Z",
                        "updated_at" => "2026-06-04T07=>57=>36.000000Z",
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Baumbach",
                            "first_name" => "Fleta",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => "2026-06-04 18=>58=>04",
                    "participant_id" => 12,
                    "contest_category" => "Formal Wear"
                ]
            ]
        ]);


        //FINAL RANKED
        //JUDGE 2
        // Score::factory()->create(
        //     [
        //         'judge_id' => 2,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Final Round',
        //         'level' => 'final',
        //         'score' => [
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "44",
        //                     "audience-impact" => "7",
        //                     "grace-under-pressure" => "34"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Gerhold",
        //                         "first_name" => "Donavon",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 85,
        //                 "submitted_at" => "2026-06-05 13=>21=>28",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "45",
        //                     "audience-impact" => "7",
        //                     "grace-under-pressure" => "35"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 4,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Wolf",
        //                         "first_name" => "Jaylon",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-05 13=>21=>28",
        //                 "participant_id" => 4,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "49",
        //                     "audience-impact" => "9",
        //                     "grace-under-pressure" => "39"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Homenick",
        //                         "first_name" => "Isaias",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 97,
        //                 "submitted_at" => "2026-06-05 13=>21=>28",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "47",
        //                     "audience-impact" => "8",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 9,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Beier",
        //                         "first_name" => "Ruthe",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 93,
        //                 "submitted_at" => "2026-06-05 13=>21=>28",
        //                 "participant_id" => 9,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "48",
        //                     "audience-impact" => "9",
        //                     "grace-under-pressure" => "37"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Steuber",
        //                         "first_name" => "Angelita",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-05 13=>21=>28",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "47",
        //                     "audience-impact" => "8",
        //                     "grace-under-pressure" => "37"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 2,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Kuphal",
        //                         "first_name" => "Meta",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 92,
        //                 "submitted_at" => "2026-06-05 13=>21=>28",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Final Round"
        //             ]
        //         ]
        //     ]
        // );
        // //JUDGE 3
        // Score::factory()->create(
        //     [
        //         'judge_id' => 3,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Final Round',
        //         'level' => 'final',
        //         'score' => [
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "44",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "34"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Gerhold",
        //                         "first_name" => "Donavon",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 88,
        //                 "submitted_at" => "2026-06-05 13=>24=>36",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "45",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "35"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 4,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Wolf",
        //                         "first_name" => "Jaylon",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 90,
        //                 "submitted_at" => "2026-06-05 13=>24=>36",
        //                 "participant_id" => 4,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "45",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "36"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Homenick",
        //                         "first_name" => "Isaias",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 91,
        //                 "submitted_at" => "2026-06-05 13=>24=>36",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "43",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "35"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 9,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Beier",
        //                         "first_name" => "Ruthe",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 88,
        //                 "submitted_at" => "2026-06-05 13=>24=>36",
        //                 "participant_id" => 9,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "45",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "36"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Steuber",
        //                         "first_name" => "Angelita",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 91,
        //                 "submitted_at" => "2026-06-05 13=>24=>36",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "46",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 3,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Kuphal",
        //                         "first_name" => "Meta",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-05 13=>24=>36",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Final Round"
        //             ]
        //         ]
        //     ]
        // );
        // //JUDGE 4
        // Score::factory()->create(
        //     [
        //         'judge_id' => 4,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Final Round',
        //         'level' => 'final',
        //         'score' =>   [
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "42",
        //                     "audience-impact" => "8",
        //                     "grace-under-pressure" => "34"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Gerhold",
        //                         "first_name" => "Donavon",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 84,
        //                 "submitted_at" => "2026-06-05 13=>28=>09",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "42",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "35"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 4,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Wolf",
        //                         "first_name" => "Jaylon",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 87,
        //                 "submitted_at" => "2026-06-05 13=>28=>09",
        //                 "participant_id" => 4,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "47",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Homenick",
        //                         "first_name" => "Isaias",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 95,
        //                 "submitted_at" => "2026-06-05 13=>28=>09",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "47",
        //                     "audience-impact" => "9",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 9,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Beier",
        //                         "first_name" => "Ruthe",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-05 13=>28=>09",
        //                 "participant_id" => 9,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "46",
        //                     "audience-impact" => "9",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Steuber",
        //                         "first_name" => "Angelita",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 93,
        //                 "submitted_at" => "2026-06-05 13=>28=>09",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "43",
        //                     "audience-impact" => "8",
        //                     "grace-under-pressure" => "37"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 4,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Kuphal",
        //                         "first_name" => "Meta",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 88,
        //                 "submitted_at" => "2026-06-05 13=>28=>09",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Final Round"
        //             ]
        //         ]
        //     ]
        // );
        // //JUDGE 5
        // Score::factory()->create(
        //     [
        //         'judge_id' => 5,
        //         'contest_id' => 1,
        //         'criteria_id' => 1,
        //         'contest_category' => 'Final Round',
        //         'level' => 'final',
        //         'score' => [
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "46",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 5,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 3,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Gerhold",
        //                         "first_name" => "Donavon",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-05 13=>30=>53",
        //                 "participant_id" => 3,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "46",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "37"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 5,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 4,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Wolf",
        //                         "first_name" => "Jaylon",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 93,
        //                 "submitted_at" => "2026-06-05 13=>30=>53",
        //                 "participant_id" => 4,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "47",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 5,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 5,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "male",
        //                         "last_name" => "Homenick",
        //                         "first_name" => "Isaias",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 95,
        //                 "submitted_at" => "2026-06-05 13=>30=>53",
        //                 "participant_id" => 5,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 2,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "47",
        //                     "audience-impact" => "9",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 5,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 9,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Beier",
        //                         "first_name" => "Ruthe",
        //                         "participant_no" => 3
        //                     ]
        //                 ],
        //                 "total_score" => 94,
        //                 "submitted_at" => "2026-06-05 13=>30=>53",
        //                 "participant_id" => 9,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 1,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "48",
        //                     "audience-impact" => "10",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 5,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 10,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Steuber",
        //                         "first_name" => "Angelita",
        //                         "participant_no" => 4
        //                     ]
        //                 ],
        //                 "total_score" => 96,
        //                 "submitted_at" => "2026-06-05 13=>30=>53",
        //                 "participant_id" => 10,
        //                 "contest_category" => "Final Round"
        //             ],
        //             [
        //                 "rank" => 3,
        //                 "level" => "final",
        //                 "scores" => [
        //                     "content" => "46",
        //                     "audience-impact" => "9",
        //                     "grace-under-pressure" => "38"
        //                 ],
        //                 "criteria" => 1,
        //                 "judge_id" => 5,
        //                 "contest_id" => 1,
        //                 "participant" => [
        //                     "id" => 11,
        //                     "contest_id" => 1,
        //                     "created_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "updated_at" => "2026-06-05T05=>15=>56.000000Z",
        //                     "participant" => [
        //                         "age" => 21,
        //                         "image" => "",
        //                         "gender" => "female",
        //                         "last_name" => "Kuphal",
        //                         "first_name" => "Meta",
        //                         "participant_no" => 5
        //                     ]
        //                 ],
        //                 "total_score" => 93,
        //                 "submitted_at" => "2026-06-05 13=>30=>53",
        //                 "participant_id" => 11,
        //                 "contest_category" => "Final Round"
        //             ]
        //         ]
        //     ]
        // );

        //POINT BASED
        //JUDGE 2
        Score::factory()->create(
            [
                'judge_id' => 2,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Final Round',
                'level' => 'final',
                'score' => [
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "44",
                            "audience-impact" => "7",
                            "grace-under-pressure" => "34"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Gerhold",
                                "first_name" => "Donavon",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 85,
                        "submitted_at" => "2026-06-05 13=>21=>28",
                        "participant_id" => 1,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "45",
                            "audience-impact" => "7",
                            "grace-under-pressure" => "35"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Wolf",
                                "first_name" => "Jaylon",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => "2026-06-05 13=>21=>28",
                        "participant_id" => 4,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "49",
                            "audience-impact" => "9",
                            "grace-under-pressure" => "39"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Homenick",
                                "first_name" => "Isaias",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 97,
                        "submitted_at" => "2026-06-05 13=>21=>28",
                        "participant_id" => 5,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "audience-impact" => "8",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Beier",
                                "first_name" => "Ruthe",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-05 13=>21=>28",
                        "participant_id" => 9,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "48",
                            "audience-impact" => "9",
                            "grace-under-pressure" => "37"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Steuber",
                                "first_name" => "Angelita",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-05 13=>21=>28",
                        "participant_id" => 10,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "audience-impact" => "8",
                            "grace-under-pressure" => "37"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Kuphal",
                                "first_name" => "Meta",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-05 13=>21=>28",
                        "participant_id" => 11,
                        "contest_category" => "Final Round"
                    ]
                ]
            ]
        );
        //JUDGE 3
        Score::factory()->create(
            [
                'judge_id' => 3,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Final Round',
                'level' => 'final',
                'score' => [
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "44",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "34"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Gerhold",
                                "first_name" => "Donavon",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => "2026-06-05 13=>24=>36",
                        "participant_id" => 1,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "45",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "35"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Wolf",
                                "first_name" => "Jaylon",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-05 13=>24=>36",
                        "participant_id" => 4,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "45",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "36"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Homenick",
                                "first_name" => "Isaias",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => "2026-06-05 13=>24=>36",
                        "participant_id" => 5,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "43",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "35"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Beier",
                                "first_name" => "Ruthe",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => "2026-06-05 13=>24=>36",
                        "participant_id" => 9,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "45",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "36"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Steuber",
                                "first_name" => "Angelita",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => "2026-06-05 13=>24=>36",
                        "participant_id" => 10,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Kuphal",
                                "first_name" => "Meta",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-05 13=>24=>36",
                        "participant_id" => 11,
                        "contest_category" => "Final Round"
                    ]
                ]
            ]
        );
        //JUDGE 4
        Score::factory()->create(
            [
                'judge_id' => 4,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Final Round',
                'level' => 'final',
                'score' =>   [
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "42",
                            "audience-impact" => "8",
                            "grace-under-pressure" => "34"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Gerhold",
                                "first_name" => "Donavon",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 84,
                        "submitted_at" => "2026-06-05 13=>28=>09",
                        "participant_id" => 1,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "42",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "35"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Wolf",
                                "first_name" => "Jaylon",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => "2026-06-05 13=>28=>09",
                        "participant_id" => 4,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Homenick",
                                "first_name" => "Isaias",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => "2026-06-05 13=>28=>09",
                        "participant_id" => 5,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "audience-impact" => "9",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Beier",
                                "first_name" => "Ruthe",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-05 13=>28=>09",
                        "participant_id" => 9,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "9",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Steuber",
                                "first_name" => "Angelita",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-05 13=>28=>09",
                        "participant_id" => 10,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "43",
                            "audience-impact" => "8",
                            "grace-under-pressure" => "37"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Kuphal",
                                "first_name" => "Meta",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => "2026-06-05 13=>28=>09",
                        "participant_id" => 11,
                        "contest_category" => "Final Round"
                    ]
                ]
            ]
        );
        //JUDGE 5
        Score::factory()->create(
            [
                'judge_id' => 5,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Final Round',
                'level' => 'final',
                'score' => [
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Gerhold",
                                "first_name" => "Donavon",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-05 13=>30=>53",
                        "participant_id" => 1,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "37"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Wolf",
                                "first_name" => "Jaylon",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-05 13=>30=>53",
                        "participant_id" => 4,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Homenick",
                                "first_name" => "Isaias",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => "2026-06-05 13=>30=>53",
                        "participant_id" => 5,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "audience-impact" => "9",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Beier",
                                "first_name" => "Ruthe",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-05 13=>30=>53",
                        "participant_id" => 9,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "48",
                            "audience-impact" => "10",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Steuber",
                                "first_name" => "Angelita",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 96,
                        "submitted_at" => "2026-06-05 13=>30=>53",
                        "participant_id" => 10,
                        "contest_category" => "Final Round"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "46",
                            "audience-impact" => "9",
                            "grace-under-pressure" => "38"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-05T05=>15=>56.000000Z",
                            "updated_at" => "2026-06-05T05=>15=>56.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Kuphal",
                                "first_name" => "Meta",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-05 13=>30=>53",
                        "participant_id" => 11,
                        "contest_category" => "Final Round"
                    ]
                ]
            ]
        );
    }
}

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

        Score::factory()->create(
            [
                'judge_id' => 2,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Production Number',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "30",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "17"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Heaney",
                                "first_name" => "Will",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 75,
                        "submitted_at" => now(),
                        "participant_id" => 1,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "17",
                            "showmanship" => "25",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Cormier",
                                "first_name" => "Valentin",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 79,
                        "submitted_at" => now(),
                        "participant_id" => 2,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "30",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "25"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Rau",
                                "first_name" => "Titus",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 83,
                        "submitted_at" => now(),
                        "participant_id" => 3,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "19",
                            "showmanship" => "38",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hand",
                                "first_name" => "Toney",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => now(),
                        "participant_id" => 4,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "19",
                            "showmanship" => "30",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Abernathy",
                                "first_name" => "Lawrence",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => now(),
                        "participant_id" => 5,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "19",
                            "showmanship" => "40",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jakubowski",
                                "first_name" => "Osbaldo",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 97,
                        "submitted_at" => now(),
                        "participant_id" => 6,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "39",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Casper",
                                "first_name" => "Athena",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => now(),
                        "participant_id" => 7,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "37",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "O'Hara",
                                "first_name" => "Jade",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => now(),
                        "participant_id" => 8,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "19",
                            "showmanship" => "37",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Lemke",
                                "first_name" => "Albertha",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => now(),
                        "participant_id" => 9,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "16",
                            "showmanship" => "36",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "16"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Wintheiser",
                                "first_name" => "Robyn",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 78,
                        "submitted_at" => now(),
                        "participant_id" => 10,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "40",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Hagenes",
                                "first_name" => "Eula",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 96,
                        "submitted_at" => now(),
                        "participant_id" => 11,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "37",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Zboncak",
                                "first_name" => "Reina",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => now(),
                        "participant_id" => 12,
                        "contest_category" => "Production Number"
                    ],
                ]
            ]
        );

        Score::factory()->create([
            'judge_id' => 2,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Sports Wear',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "26",
                        "body-fitness" => "26",
                        "overall-look" => "7",
                        "confidence-stage-presence" => "25"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Heaney",
                            "first_name" => "Will",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 84,
                    "submitted_at" => now(),
                    "participant_id" => 1,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "24",
                        "overall-look" => "7",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Cormier",
                            "first_name" => "Valentin",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => now(),
                    "participant_id" => 2,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "25",
                        "body-fitness" => "20",
                        "overall-look" => "6",
                        "confidence-stage-presence" => "25"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Rau",
                            "first_name" => "Titus",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 76,
                    "submitted_at" => now(),
                    "participant_id" => 3,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "29",
                        "body-fitness" => "27",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hand",
                            "first_name" => "Toney",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => now(),
                    "participant_id" => 4,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "26",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Abernathy",
                            "first_name" => "Lawrence",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => now(),
                    "participant_id" => 5,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "25",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Jakubowski",
                            "first_name" => "Osbaldo",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => now(),
                    "participant_id" => 6,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "27",
                        "overall-look" => "7",
                        "confidence-stage-presence" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Casper",
                            "first_name" => "Athena",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => now(),
                    "participant_id" => 7,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "28",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "O'Hara",
                            "first_name" => "Jade",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => now(),
                    "participant_id" => 8,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 2.5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "28",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Lemke",
                            "first_name" => "Albertha",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => now(),
                    "participant_id" => 9,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "26",
                        "body-fitness" => "26",
                        "overall-look" => "6",
                        "confidence-stage-presence" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Wintheiser",
                            "first_name" => "Robyn",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 84,
                    "submitted_at" => now(),
                    "participant_id" => 10,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "27",
                        "overall-look" => "7",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Hagenes",
                            "first_name" => "Eula",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => now(),
                    "participant_id" => 11,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 2.5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "28",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 2,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Zboncak",
                            "first_name" => "Reina",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => now(),
                    "participant_id" => 12,
                    "contest_category" => "Sports Wear"
                ],
            ],
        ]);

        Score::factory()->create(
            [
                'judge_id' => 2,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Barong/Filipiana Competition',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "36",
                            "overall-impact" => "18",
                            "poise-and-bearing" => "37"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Heaney",
                                "first_name" => "Will",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => now(),
                        "participant_id" => 1,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "37",
                            "overall-impact" => "17",
                            "poise-and-bearing" => "37"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Cormier",
                                "first_name" => "Valentin",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => now(),
                        "participant_id" => 2,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "35",
                            "overall-impact" => "15",
                            "poise-and-bearing" => "35"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Rau",
                                "first_name" => "Titus",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 85,
                        "submitted_at" => now(),
                        "participant_id" => 3,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "39",
                            "overall-impact" => "19",
                            "poise-and-bearing" => "39"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hand",
                                "first_name" => "Toney",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 97,
                        "submitted_at" => now(),
                        "participant_id" => 4,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "40",
                            "overall-impact" => "20",
                            "poise-and-bearing" => "40"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Abernathy",
                                "first_name" => "Lawrence",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 100,
                        "submitted_at" => now(),
                        "participant_id" => 5,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "36",
                            "overall-impact" => "16",
                            "poise-and-bearing" => "36"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jakubowski",
                                "first_name" => "Osbaldo",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => now(),
                        "participant_id" => 6,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "37",
                            "overall-impact" => "16",
                            "poise-and-bearing" => "37"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Casper",
                                "first_name" => "Athena",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => now(),
                        "participant_id" => 7,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "38",
                            "overall-impact" => "19",
                            "poise-and-bearing" => "40"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "O'Hara",
                                "first_name" => "Jade",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 97,
                        "submitted_at" => now(),
                        "participant_id" => 8,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "39",
                            "overall-impact" => "18",
                            "poise-and-bearing" => "39"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Lemke",
                                "first_name" => "Albertha",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 96,
                        "submitted_at" => now(),
                        "participant_id" => 9,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "37",
                            "overall-impact" => "16",
                            "poise-and-bearing" => "39"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Wintheiser",
                                "first_name" => "Robyn",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => now(),
                        "participant_id" => 10,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "38",
                            "overall-impact" => "16",
                            "poise-and-bearing" => "38"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Hagenes",
                                "first_name" => "Eula",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => now(),
                        "participant_id" => 11,
                        "contest_category" => "Barong/Filipiana Competition"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "elegance" => "38",
                            "overall-impact" => "17",
                            "poise-and-bearing" => "37"
                        ],
                        "criteria" => 59,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Zboncak",
                                "first_name" => "Reina",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => now(),
                        "participant_id" => 12,
                        "contest_category" => "Barong/Filipiana Competition"
                    ]
                ],
            ]
        );

        Score::factory()->create(
            [
                'judge_id' => 3,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Production Number',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "38",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "29"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Heaney",
                                "first_name" => "Will",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 97,
                        "submitted_at" => now(),
                        "participant_id" => 1,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "32",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Cormier",
                                "first_name" => "Valentin",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => now(),
                        "participant_id" => 2,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "37",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Rau",
                                "first_name" => "Titus",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => now(),
                        "participant_id" => 3,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3.5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "35",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "30"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hand",
                                "first_name" => "Toney",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => now(),
                        "participant_id" => 4,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "36",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Abernathy",
                                "first_name" => "Lawrence",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => now(),
                        "participant_id" => 5,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "40",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jakubowski",
                                "first_name" => "Osbaldo",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 98,
                        "submitted_at" => now(),
                        "participant_id" => 6,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "38",
                            "overall-impact" => "8",
                            "mastery-and-coordination" => "25"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Casper",
                                "first_name" => "Athena",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => now(),
                        "participant_id" => 7,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "40",
                            "overall-impact" => "8",
                            "mastery-and-coordination" => "29"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "O'Hara",
                                "first_name" => "Jade",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 97,
                        "submitted_at" => now(),
                        "participant_id" => 8,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "35",
                            "overall-impact" => "8",
                            "mastery-and-coordination" => "26"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Lemke",
                                "first_name" => "Albertha",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => now(),
                        "participant_id" => 9,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 4.5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "35",
                            "overall-impact" => "8",
                            "mastery-and-coordination" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Wintheiser",
                                "first_name" => "Robyn",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => now(),
                        "participant_id" => 10,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 4.5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "33",
                            "overall-impact" => "8",
                            "mastery-and-coordination" => "29"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Hagenes",
                                "first_name" => "Eula",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => now(),
                        "participant_id" => 11,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "20",
                            "showmanship" => "37",
                            "overall-impact" => "8",
                            "mastery-and-coordination" => "29"
                        ],
                        "criteria" => 59,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Zboncak",
                                "first_name" => "Reina",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => now(),
                        "participant_id" => 12,
                        "contest_category" => "Production Number"
                    ]
                ],
            ],
        );

        Score::factory()->create([
            'judge_id' => 3,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Sports Wear',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "27",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "29"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Heaney",
                            "first_name" => "Will",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => now(),
                    "participant_id" => 1,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "26",
                        "body-fitness" => "26",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Cormier",
                            "first_name" => "Valentin",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => now(),
                    "participant_id" => 2,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "27",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Rau",
                            "first_name" => "Titus",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 3,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "27",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hand",
                            "first_name" => "Toney",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 4,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "28",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Abernathy",
                            "first_name" => "Lawrence",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 5,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "28",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Jakubowski",
                            "first_name" => "Osbaldo",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => now(),
                    "participant_id" => 6,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "26",
                        "body-fitness" => "28",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Casper",
                            "first_name" => "Athena",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 7,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "28",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "O'Hara",
                            "first_name" => "Jade",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => now(),
                    "participant_id" => 8,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "26",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Lemke",
                            "first_name" => "Albertha",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 9,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "25",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Wintheiser",
                            "first_name" => "Robyn",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => now(),
                    "participant_id" => 10,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "28",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Hagenes",
                            "first_name" => "Eula",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => now(),
                    "participant_id" => 11,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "26",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Zboncak",
                            "first_name" => "Reina",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => now(),
                    "participant_id" => 12,
                    "contest_category" => "Sports Wear"
                ]
            ],

        ]);

        Score::factory()->create([
            'judge_id' => 3,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Barong/Filipiana Competition',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "37",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Heaney",
                            "first_name" => "Will",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => now(),
                    "participant_id" => 1,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "37",
                        "overall-impact" => "16",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Cormier",
                            "first_name" => "Valentin",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 2,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "39",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Rau",
                            "first_name" => "Titus",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => now(),
                    "participant_id" => 3,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "39",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hand",
                            "first_name" => "Toney",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => now(),
                    "participant_id" => 4,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "38"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Abernathy",
                            "first_name" => "Lawrence",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => now(),
                    "participant_id" => 5,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "37",
                        "overall-impact" => "17",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Jakubowski",
                            "first_name" => "Osbaldo",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => now(),
                    "participant_id" => 6,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Casper",
                            "first_name" => "Athena",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 7,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "37",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "38"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "O'Hara",
                            "first_name" => "Jade",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => now(),
                    "participant_id" => 8,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Lemke",
                            "first_name" => "Albertha",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => now(),
                    "participant_id" => 9,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "35",
                        "overall-impact" => "17",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Wintheiser",
                            "first_name" => "Robyn",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 10,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "38",
                        "overall-impact" => "19",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Hagenes",
                            "first_name" => "Eula",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => now(),
                    "participant_id" => 11,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 3.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 3,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Zboncak",
                            "first_name" => "Reina",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => now(),
                    "participant_id" => 12,
                    "contest_category" => "Barong/Filipiana Competition"
                ]
            ],
        ]);

        Score::factory()->create([
            'judge_id' => 4,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Production Number',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "15",
                        "showmanship" => "33",
                        "overall-impact" => "6",
                        "mastery-and-coordination" => "22"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Heaney",
                            "first_name" => "Will",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 76,
                    "submitted_at" => now(),
                    "participant_id" => 1,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "15",
                        "showmanship" => "33",
                        "overall-impact" => "6",
                        "mastery-and-coordination" => "25"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Cormier",
                            "first_name" => "Valentin",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 79,
                    "submitted_at" => now(),
                    "participant_id" => 2,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "15",
                        "showmanship" => "33",
                        "overall-impact" => "6",
                        "mastery-and-coordination" => "24"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Rau",
                            "first_name" => "Titus",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 78,
                    "submitted_at" => now(),
                    "participant_id" => 3,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 2.5,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "18",
                        "showmanship" => "35",
                        "overall-impact" => "9",
                        "mastery-and-coordination" => "24"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hand",
                            "first_name" => "Toney",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => now(),
                    "participant_id" => 4,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 2.5,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "17",
                        "showmanship" => "36",
                        "overall-impact" => "7",
                        "mastery-and-coordination" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Abernathy",
                            "first_name" => "Lawrence",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => now(),
                    "participant_id" => 5,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "20",
                        "showmanship" => "38",
                        "overall-impact" => "9",
                        "mastery-and-coordination" => "30"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Jakubowski",
                            "first_name" => "Osbaldo",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 97,
                    "submitted_at" => now(),
                    "participant_id" => 6,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "18",
                        "showmanship" => "38",
                        "overall-impact" => "7",
                        "mastery-and-coordination" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Casper",
                            "first_name" => "Athena",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 7,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "18",
                        "showmanship" => "38",
                        "overall-impact" => "7",
                        "mastery-and-coordination" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "O'Hara",
                            "first_name" => "Jade",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 8,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "16",
                        "showmanship" => "37",
                        "overall-impact" => "7",
                        "mastery-and-coordination" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Lemke",
                            "first_name" => "Albertha",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => now(),
                    "participant_id" => 9,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "14",
                        "showmanship" => "35",
                        "overall-impact" => "6",
                        "mastery-and-coordination" => "25"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Wintheiser",
                            "first_name" => "Robyn",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 80,
                    "submitted_at" => now(),
                    "participant_id" => 10,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "18",
                        "showmanship" => "38",
                        "overall-impact" => "8",
                        "mastery-and-coordination" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Hagenes",
                            "first_name" => "Eula",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => now(),
                    "participant_id" => 11,
                    "contest_category" => "Production Number"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "projection" => "15",
                        "showmanship" => "35",
                        "overall-impact" => "6",
                        "mastery-and-coordination" => "25"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Zboncak",
                            "first_name" => "Reina",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 81,
                    "submitted_at" => now(),
                    "participant_id" => 12,
                    "contest_category" => "Production Number"
                ]
            ],

        ]);

        Score::factory()->create(
            [
                'judge_id' => 4,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Sports Wear',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "25",
                            "body-fitness" => "25",
                            "overall-look" => "6",
                            "confidence-stage-presence" => "25"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Heaney",
                                "first_name" => "Will",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 81,
                        "submitted_at" => now(),
                        "participant_id" => 1,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "25",
                            "body-fitness" => "25",
                            "overall-look" => "6",
                            "confidence-stage-presence" => "25"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Cormier",
                                "first_name" => "Valentin",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 81,
                        "submitted_at" => now(),
                        "participant_id" => 2,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "24",
                            "body-fitness" => "25",
                            "overall-look" => "7",
                            "confidence-stage-presence" => "25"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Rau",
                                "first_name" => "Titus",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 81,
                        "submitted_at" => now(),
                        "participant_id" => 3,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "26",
                            "body-fitness" => "27",
                            "overall-look" => "7",
                            "confidence-stage-presence" => "26"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hand",
                                "first_name" => "Toney",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 86,
                        "submitted_at" => now(),
                        "participant_id" => 4,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "27",
                            "body-fitness" => "27",
                            "overall-look" => "7",
                            "confidence-stage-presence" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Abernathy",
                                "first_name" => "Lawrence",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => now(),
                        "participant_id" => 5,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "27",
                            "body-fitness" => "26",
                            "overall-look" => "9",
                            "confidence-stage-presence" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jakubowski",
                                "first_name" => "Osbaldo",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => now(),
                        "participant_id" => 6,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 5.5,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "25",
                            "body-fitness" => "25",
                            "overall-look" => "6",
                            "confidence-stage-presence" => "25"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Casper",
                                "first_name" => "Athena",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 81,
                        "submitted_at" => now(),
                        "participant_id" => 7,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "27",
                            "body-fitness" => "27",
                            "overall-look" => "7",
                            "confidence-stage-presence" => "29"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "O'Hara",
                                "first_name" => "Jade",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => now(),
                        "participant_id" => 8,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "25",
                            "body-fitness" => "25",
                            "overall-look" => "6",
                            "confidence-stage-presence" => "26"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Lemke",
                                "first_name" => "Albertha",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 82,
                        "submitted_at" => now(),
                        "participant_id" => 9,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 5.5,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "25",
                            "body-fitness" => "24",
                            "overall-look" => "6",
                            "confidence-stage-presence" => "26"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Wintheiser",
                                "first_name" => "Robyn",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 81,
                        "submitted_at" => now(),
                        "participant_id" => 10,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "26",
                            "body-fitness" => "28",
                            "overall-look" => "6",
                            "confidence-stage-presence" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Hagenes",
                                "first_name" => "Eula",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => now(),
                        "participant_id" => 11,
                        "contest_category" => "Sports Wear"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "personality" => "28",
                            "body-fitness" => "26",
                            "overall-look" => "8",
                            "confidence-stage-presence" => "27"
                        ],
                        "criteria" => 59,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Zboncak",
                                "first_name" => "Reina",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => now(),
                        "participant_id" => 12,
                        "contest_category" => "Sports Wear"
                    ]
                ],

            ]
        );

        Score::factory()->create([
            'judge_id' => 4,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Barong/Filipiana Competition',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "31",
                        "overall-impact" => "13",
                        "poise-and-bearing" => "32"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Heaney",
                            "first_name" => "Will",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 76,
                    "submitted_at" => now(),
                    "participant_id" => 1,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "30",
                        "overall-impact" => "13",
                        "poise-and-bearing" => "32"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Cormier",
                            "first_name" => "Valentin",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 75,
                    "submitted_at" => now(),
                    "participant_id" => 2,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "31",
                        "overall-impact" => "13",
                        "poise-and-bearing" => "32"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Rau",
                            "first_name" => "Titus",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 76,
                    "submitted_at" => now(),
                    "participant_id" => 3,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hand",
                            "first_name" => "Toney",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 4,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "35",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Abernathy",
                            "first_name" => "Lawrence",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 5,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "32",
                        "overall-impact" => "15",
                        "poise-and-bearing" => "34"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Jakubowski",
                            "first_name" => "Osbaldo",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 81,
                    "submitted_at" => now(),
                    "participant_id" => 6,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "34",
                        "overall-impact" => "14",
                        "poise-and-bearing" => "34"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Casper",
                            "first_name" => "Athena",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 82,
                    "submitted_at" => now(),
                    "participant_id" => 7,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "34",
                        "overall-impact" => "14",
                        "poise-and-bearing" => "34"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "O'Hara",
                            "first_name" => "Jade",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 82,
                    "submitted_at" => now(),
                    "participant_id" => 8,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "37",
                        "overall-impact" => "16",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Lemke",
                            "first_name" => "Albertha",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 9,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "32",
                        "overall-impact" => "13",
                        "poise-and-bearing" => "31"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Wintheiser",
                            "first_name" => "Robyn",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 76,
                    "submitted_at" => now(),
                    "participant_id" => 10,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "38",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Hagenes",
                            "first_name" => "Eula",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => now(),
                    "participant_id" => 11,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "34",
                        "overall-impact" => "15",
                        "poise-and-bearing" => "34"
                    ],
                    "criteria" => 59,
                    "judge_id" => 4,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Zboncak",
                            "first_name" => "Reina",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 83,
                    "submitted_at" => now(),
                    "participant_id" => 12,
                    "contest_category" => "Barong/Filipiana Competition"
                ]
            ],

        ]);

        Score::factory()->create(
            [
                'judge_id' => 5,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Production Number',
                'level' => 'preliminary',
                'score' => [
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "17",
                            "showmanship" => "33",
                            "overall-impact" => "9",
                            "mastery-and-coordination" => "26"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 1,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Heaney",
                                "first_name" => "Will",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 85,
                        "submitted_at" => now(),
                        "participant_id" => 1,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "16",
                            "showmanship" => "32",
                            "overall-impact" => "9",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 2,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Cormier",
                                "first_name" => "Valentin",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 85,
                        "submitted_at" => now(),
                        "participant_id" => 2,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "16",
                            "showmanship" => "34",
                            "overall-impact" => "9",
                            "mastery-and-coordination" => "26"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 3,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Rau",
                                "first_name" => "Titus",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 85,
                        "submitted_at" => now(),
                        "participant_id" => 3,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "17",
                            "showmanship" => "34",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Hand",
                                "first_name" => "Toney",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => now(),
                        "participant_id" => 4,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "35",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Abernathy",
                                "first_name" => "Lawrence",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => now(),
                        "participant_id" => 5,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "38",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jakubowski",
                                "first_name" => "Osbaldo",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => now(),
                        "participant_id" => 6,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 3,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "16",
                            "showmanship" => "37",
                            "overall-impact" => "9",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 7,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Casper",
                                "first_name" => "Athena",
                                "participant_no" => 1
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => now(),
                        "participant_id" => 7,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 1,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "38",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "O'Hara",
                                "first_name" => "Jade",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => now(),
                        "participant_id" => 8,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 2,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "18",
                            "showmanship" => "36",
                            "overall-impact" => "10",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Lemke",
                                "first_name" => "Albertha",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => now(),
                        "participant_id" => 9,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 5,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "17",
                            "showmanship" => "34",
                            "overall-impact" => "9",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 10,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Wintheiser",
                                "first_name" => "Robyn",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => now(),
                        "participant_id" => 10,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 4,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "17",
                            "showmanship" => "35",
                            "overall-impact" => "9",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Hagenes",
                                "first_name" => "Eula",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => now(),
                        "participant_id" => 11,
                        "contest_category" => "Production Number"
                    ],
                    [
                        "rank" => 6,
                        "level" => "preliminary",
                        "scores" => [
                            "projection" => "16",
                            "showmanship" => "33",
                            "overall-impact" => "9",
                            "mastery-and-coordination" => "28"
                        ],
                        "criteria" => 59,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 12,
                            "contest_id" => 1,
                            "created_at" => now(),
                            "updated_at" => now(),
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Zboncak",
                                "first_name" => "Reina",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 86,
                        "submitted_at" => now(),
                        "participant_id" => 12,
                        "contest_category" => "Production Number"
                    ]
                ],

            ]
        );

        Score::factory()->create([
            'judge_id' => 5,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Sports Wear',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "25",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Heaney",
                            "first_name" => "Will",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => now(),
                    "participant_id" => 1,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "25",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Cormier",
                            "first_name" => "Valentin",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => now(),
                    "participant_id" => 2,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "26",
                        "body-fitness" => "26",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "25"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Rau",
                            "first_name" => "Titus",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => now(),
                    "participant_id" => 3,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "29",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hand",
                            "first_name" => "Toney",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => now(),
                    "participant_id" => 4,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "28",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Abernathy",
                            "first_name" => "Lawrence",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => now(),
                    "participant_id" => 5,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "26",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "29"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Jakubowski",
                            "first_name" => "Osbaldo",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => now(),
                    "participant_id" => 6,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "26",
                        "body-fitness" => "27",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Casper",
                            "first_name" => "Athena",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 7,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "28",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "29"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "O'Hara",
                            "first_name" => "Jade",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 94,
                    "submitted_at" => now(),
                    "participant_id" => 8,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "28",
                        "body-fitness" => "27",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "29"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Lemke",
                            "first_name" => "Albertha",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => now(),
                    "participant_id" => 9,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "25",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "28"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Wintheiser",
                            "first_name" => "Robyn",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => now(),
                    "participant_id" => 10,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "27",
                        "body-fitness" => "27",
                        "overall-look" => "9",
                        "confidence-stage-presence" => "27"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Hagenes",
                            "first_name" => "Eula",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 11,
                    "contest_category" => "Sports Wear"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "personality" => "26",
                        "body-fitness" => "26",
                        "overall-look" => "8",
                        "confidence-stage-presence" => "26"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Zboncak",
                            "first_name" => "Reina",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => now(),
                    "participant_id" => 12,
                    "contest_category" => "Sports Wear"
                ]
            ],

        ]);

        Score::factory()->create([
            'judge_id' => 5,
            'contest_id' => 1,
            'criteria_id' => 1,
            'contest_category' => 'Barong/Filipiana Competition',
            'level' => 'preliminary',
            'score' => [
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "35",
                        "overall-impact" => "16",
                        "poise-and-bearing" => "35"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 1,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Heaney",
                            "first_name" => "Will",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 86,
                    "submitted_at" => now(),
                    "participant_id" => 1,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 4,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "35",
                        "overall-impact" => "17",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 2,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Cormier",
                            "first_name" => "Valentin",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => now(),
                    "participant_id" => 2,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "35",
                        "overall-impact" => "17",
                        "poise-and-bearing" => "35"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 3,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Rau",
                            "first_name" => "Titus",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 87,
                    "submitted_at" => now(),
                    "participant_id" => 3,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "38",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 4,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Hand",
                            "first_name" => "Toney",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 93,
                    "submitted_at" => now(),
                    "participant_id" => 4,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "37",
                        "overall-impact" => "17",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 5,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Abernathy",
                            "first_name" => "Lawrence",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 5,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "17",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 6,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "male",
                            "last_name" => "Jakubowski",
                            "first_name" => "Osbaldo",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 89,
                    "submitted_at" => now(),
                    "participant_id" => 6,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "16",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 7,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Casper",
                            "first_name" => "Athena",
                            "participant_no" => 1
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => now(),
                    "participant_id" => 7,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 2,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "37",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "36"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 8,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "O'Hara",
                            "first_name" => "Jade",
                            "participant_no" => 2
                        ]
                    ],
                    "total_score" => 91,
                    "submitted_at" => now(),
                    "participant_id" => 8,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 1,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "37",
                        "overall-impact" => "18",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 9,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Lemke",
                            "first_name" => "Albertha",
                            "participant_no" => 3
                        ]
                    ],
                    "total_score" => 92,
                    "submitted_at" => now(),
                    "participant_id" => 9,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 6,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "35",
                        "overall-impact" => "16",
                        "poise-and-bearing" => "34"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 10,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Wintheiser",
                            "first_name" => "Robyn",
                            "participant_no" => 4
                        ]
                    ],
                    "total_score" => 85,
                    "submitted_at" => now(),
                    "participant_id" => 10,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 4.5,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "17",
                        "poise-and-bearing" => "35"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 11,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Hagenes",
                            "first_name" => "Eula",
                            "participant_no" => 5
                        ]
                    ],
                    "total_score" => 88,
                    "submitted_at" => now(),
                    "participant_id" => 11,
                    "contest_category" => "Barong/Filipiana Competition"
                ],
                [
                    "rank" => 3,
                    "level" => "preliminary",
                    "scores" => [
                        "elegance" => "36",
                        "overall-impact" => "17",
                        "poise-and-bearing" => "37"
                    ],
                    "criteria" => 59,
                    "judge_id" => 5,
                    "contest_id" => 1,
                    "participant" => [
                        "id" => 12,
                        "contest_id" => 1,
                        "created_at" => now(),
                        "updated_at" => now(),
                        "participant" => [
                            "age" => 21,
                            "image" => "",
                            "gender" => "female",
                            "last_name" => "Zboncak",
                            "first_name" => "Reina",
                            "participant_no" => 6
                        ]
                    ],
                    "total_score" => 90,
                    "submitted_at" => now(),
                    "participant_id" => 12,
                    "contest_category" => "Barong/Filipiana Competition"
                ]
            ],

        ]);



        //FINAL
        Score::factory()->create(
            [
                'judge_id' => 2,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Final Question and Answer',
                'level' => 'final',
                'score' => [
                    [

                        "rank" => 1.5,
                        "level" => "final",
                        "scores" => [
                            "content" => "50",
                            "delivery" => "27",
                            "overall-impact" => "9",
                            "stage-presence" => "8"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jacobi",
                                "first_name" => "Roscoe",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-04 09=>11=>15",
                        "participant_id" => 4,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 1.5,
                        "level" => "final",
                        "scores" => [
                            "content" => "50",
                            "delivery" => "28",
                            "overall-impact" => "8",
                            "stage-presence" => "8"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Turcotte",
                                "first_name" => "Grover",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 94,
                        "submitted_at" => "2026-06-04 09=>11=>15",
                        "participant_id" => 5,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "25",
                            "delivery" => "15",
                            "overall-impact" => "3",
                            "stage-presence" => "4"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Bailey",
                                "first_name" => "Keven",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 47,
                        "submitted_at" => "2026-06-04 09=>11=>15",
                        "participant_id" => 6,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "44",
                            "delivery" => "29",
                            "overall-impact" => "8",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Johnson",
                                "first_name" => "Madaline",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 09=>11=>15",
                        "participant_id" => 8,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "40",
                            "delivery" => "25",
                            "overall-impact" => "7",
                            "stage-presence" => "7"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Tromp",
                                "first_name" => "Jermaine",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 79,
                        "submitted_at" => "2026-06-04 09=>11=>15",
                        "participant_id" => 9,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "45",
                            "delivery" => "28",
                            "overall-impact" => "8",
                            "stage-presence" => "8"
                        ],
                        "criteria" => 1,
                        "judge_id" => 2,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Mertz",
                                "first_name" => "Ashly",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => "2026-06-04 09=>11=>15",
                        "participant_id" => 11,
                        "contest_category" => "Final Question and Answer"
                    ],
                ]
            ]
        );

        Score::factory()->create(
            [
                'judge_id' => 3,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Final Question and Answer',
                'level' => 'final',
                'score' => [
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "48",
                            "delivery" => "28",
                            "overall-impact" => "7",
                            "stage-presence" => "10"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jacobi",
                                "first_name" => "Roscoe",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 09=>19=>32",
                        "participant_id" => 4,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "48",
                            "delivery" => "27",
                            "overall-impact" => "6",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Turcotte",
                                "first_name" => "Grover",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 09=>19=>32",
                        "participant_id" => 5,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "42",
                            "delivery" => "20",
                            "overall-impact" => "5",
                            "stage-presence" => "8"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Bailey",
                                "first_name" => "Keven",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 75,
                        "submitted_at" => "2026-06-04 09=>19=>32",
                        "participant_id" => 6,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "48",
                            "delivery" => "28",
                            "overall-impact" => "8",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Johnson",
                                "first_name" => "Madaline",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 09=>19=>32",
                        "participant_id" => 8,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "45",
                            "delivery" => "26",
                            "overall-impact" => "6",
                            "stage-presence" => "6"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Tromp",
                                "first_name" => "Jermaine",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 83,
                        "submitted_at" => "2026-06-04 09=>19=>32",
                        "participant_id" => 9,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "delivery" => "27",
                            "overall-impact" => "7",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 3,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Mertz",
                                "first_name" => "Ashly",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 90,
                        "submitted_at" => "2026-06-04 09=>19=>32",
                        "participant_id" => 11,
                        "contest_category" => "Final Question and Answer"
                    ]
                ]
            ]
        );

        Score::factory()->create(
            [
                'judge_id' => 4,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Final Question and Answer',
                'level' => 'final',
                'score' => [
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "48",
                            "delivery" => "28",
                            "overall-impact" => "10",
                            "stage-presence" => "10"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jacobi",
                                "first_name" => "Roscoe",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 96,
                        "submitted_at" => "2026-06-04 09=>24=>01",
                        "participant_id" => 4,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "delivery" => "27",
                            "overall-impact" => "9",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Turcotte",
                                "first_name" => "Grover",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 09=>24=>01",
                        "participant_id" => 5,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "40",
                            "delivery" => "20",
                            "overall-impact" => "7",
                            "stage-presence" => "7"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Bailey",
                                "first_name" => "Keven",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 74,
                        "submitted_at" => "2026-06-04 09=>24=>01",
                        "participant_id" => 6,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "46",
                            "delivery" => "26",
                            "overall-impact" => "8",
                            "stage-presence" => "8"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Johnson",
                                "first_name" => "Madaline",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 88,
                        "submitted_at" => "2026-06-04 09=>24=>01",
                        "participant_id" => 8,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "45",
                            "delivery" => "26",
                            "overall-impact" => "8",
                            "stage-presence" => "8"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Tromp",
                                "first_name" => "Jermaine",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 87,
                        "submitted_at" => "2026-06-04 09=>24=>01",
                        "participant_id" => 9,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "delivery" => "27",
                            "overall-impact" => "8",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 4,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Mertz",
                                "first_name" => "Ashly",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 91,
                        "submitted_at" => "2026-06-04 09=>24=>01",
                        "participant_id" => 11,
                        "contest_category" => "Final Question and Answer"
                    ]
                ]
            ]
        );

        Score::factory()->create(
            [
                'judge_id' => 5,
                'contest_id' => 1,
                'criteria_id' => 1,
                'contest_category' => 'Final Question and Answer',
                'level' => 'final',
                'score' => [
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "49",
                            "delivery" => "28",
                            "overall-impact" => "9",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 4,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Jacobi",
                                "first_name" => "Roscoe",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 95,
                        "submitted_at" => "2026-06-04 09=>27=>54",
                        "participant_id" => 4,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "delivery" => "27",
                            "overall-impact" => "9",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 5,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Turcotte",
                                "first_name" => "Grover",
                                "participant_no" => 4
                            ]
                        ],
                        "total_score" => 92,
                        "submitted_at" => "2026-06-04 09=>27=>54",
                        "participant_id" => 5,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "40",
                            "delivery" => "25",
                            "overall-impact" => "5",
                            "stage-presence" => "6"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 6,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "male",
                                "last_name" => "Bailey",
                                "first_name" => "Keven",
                                "participant_no" => 6
                            ]
                        ],
                        "total_score" => 76,
                        "submitted_at" => "2026-06-04 09=>27=>54",
                        "participant_id" => 6,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 1,
                        "level" => "final",
                        "scores" => [
                            "content" => "47",
                            "delivery" => "28",
                            "overall-impact" => "9",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 8,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Johnson",
                                "first_name" => "Madaline",
                                "participant_no" => 2
                            ]
                        ],
                        "total_score" => 93,
                        "submitted_at" => "2026-06-04 09=>27=>54",
                        "participant_id" => 8,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 3,
                        "level" => "final",
                        "scores" => [
                            "content" => "43",
                            "delivery" => "26",
                            "overall-impact" => "7",
                            "stage-presence" => "7"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 9,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Tromp",
                                "first_name" => "Jermaine",
                                "participant_no" => 3
                            ]
                        ],
                        "total_score" => 83,
                        "submitted_at" => "2026-06-04 09=>27=>54",
                        "participant_id" => 9,
                        "contest_category" => "Final Question and Answer"
                    ],
                    [
                        "rank" => 2,
                        "level" => "final",
                        "scores" => [
                            "content" => "45",
                            "delivery" => "27",
                            "overall-impact" => "8",
                            "stage-presence" => "9"
                        ],
                        "criteria" => 1,
                        "judge_id" => 5,
                        "contest_id" => 1,
                        "participant" => [
                            "id" => 11,
                            "contest_id" => 1,
                            "created_at" => "2026-06-04T01=>07=>07.000000Z",
                            "updated_at" => "2026-06-04T01=>07=>07.000000Z",
                            "participant" => [
                                "age" => 21,
                                "image" => "",
                                "gender" => "female",
                                "last_name" => "Mertz",
                                "first_name" => "Ashly",
                                "participant_no" => 5
                            ]
                        ],
                        "total_score" => 89,
                        "submitted_at" => "2026-06-04 09=>27=>54",
                        "participant_id" => 11,
                        "contest_category" => "Final Question and Answer"
                    ]
                ]
            ]
        );
    }
}

<?php

namespace Database\Factories;

use App\Models\Criteria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Criteria>
 */
class CriteriaFactory extends Factory
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
            'judges' => [2, 3, 4, 5],
            'qualified_participant' => 3,
            'final_scoring_method' => 'finalprelim',
            'preliminary_scoring_method' => 'default',
            'criteria' => [
                [
                    "type" => "contest",
                    "data" => [
                        "level" => "preliminary",
                        "total" => 100,
                        "content" => "Production Number",
                        "criteria" => [
                            ["criterion" => "Showmanship", "score" => 40],
                            ["criterion" => "Projection", "score" => 20],
                            ["criterion" => "Mastery and Coordination", "score" => 30],
                            ["criterion" => "Overall Impact", "score" => 10],
                        ]
                    ],
                ],
                [
                    "type" => "contest",
                    "data" => [
                        "level" => "preliminary",
                        "total" => 100,
                        "content" => "Sports Wear",
                        "criteria" => [
                            ["criterion" => "Confidence & Stage Presence", "score" => 30],
                            ["criterion" => "Body & Fitness", "score" => 30],
                            ["criterion" => "Personality", "score" => 30],
                            ["criterion" => "Overall Look", "score" => 10],
                        ]
                    ],
                ],
                [
                    "type" => "contest",
                    "data" => [
                        "level" => "preliminary",
                        "total" => 100,
                        "content" => "Barong/Filipiana Competition",
                        "criteria" => [
                            ["criterion" => "Elegance", "score" => 40],
                            ["criterion" => "Poise and Bearing", "score" => 40],
                            ["criterion" => "Overall Impact", "score" =>20],
                        ]
                    ],
                ],
                // [
                //     "type" => "contest",
                //     "data" => [
                //         "level" => "preliminary",
                //         "total" => 100,
                //         "content" => "Formal Wear",
                //         "criteria" => [
                //             ["criterion" => "Elegance", "score" => 30],
                //             ["criterion" => "Beauty", "score" => 30],
                //             ["criterion" => "Poise and Bearing", "score" => 30],
                //             ["criterion" => "Audience Impact", "score" => 10],
                //         ]
                //     ],
                // ],
                [
                    "type" => "contest",
                    "data" => [
                        "level" => "final",
                        "total" => 100,
                        "content" => "Final Round",
                        "criteria" => [
                            ["criterion" => "Grace Under Pressure", "score" => 40],
                            ["criterion" => "Content", "score" => 50],
                            ["criterion" => "Audience Impact", "score" => 10],
                        ]
                    ],
                ],


            ]
        ];
    }
}

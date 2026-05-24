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
                            ["criterion" => "Confidence and Beauty", "score" => 40],
                            ["criterion" => "Master and Delivery of Introduction", "score" => 50],
                            ["criterion" => "Audience Impact", "score" => 10],
                        ]
                    ],
                ],
                [
                    "type" => "contest",
                    "data" => [
                        "level" => "preliminary",
                        "total" => 100,
                        "content" => "Swimwear",
                        "criteria" => [
                            ["criterion" => "Poise and Bearing", "score" => 30],
                            ["criterion" => "Beauty", "score" => 30],
                            ["criterion" => "Execution", "score" => 30],
                            ["criterion" => "Audience Impact", "score" => 10],
                        ]
                    ],
                ],
                [
                    "type" => "contest",
                    "data" => [
                        "level" => "preliminary",
                        "total" => 100,
                        "content" => "Casual Interview",
                        "criteria" => [
                            ["criterion" => "Sincerity & Grace Under Pressure", "score" => 40],
                            ["criterion" => "Content", "score" => 50],
                            ["criterion" => "Audience Impact", "score" => 10],
                        ]
                    ],
                ],
                [
                    "type" => "contest",
                    "data" => [
                        "level" => "preliminary",
                        "total" => 100,
                        "content" => "Formal Wear",
                        "criteria" => [
                            ["criterion" => "Elegance", "score" => 30],
                            ["criterion" => "Beauty", "score" => 30],
                            ["criterion" => "Poise and Bearing", "score" => 30],
                            ["criterion" => "Audience Impact", "score" => 10],
                        ]
                    ],
                ],
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

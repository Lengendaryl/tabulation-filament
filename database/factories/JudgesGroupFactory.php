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
            'judge_id' => [2, 3, 4, 5],
            [
                'level' => 'preliminary',
                'content' => 'Production Number',
                'judges' => [
                    [
                        'status' => false,
                        'judge_id' => 2
                    ],
                    [
                        'status' => false,
                        'judge_id' => 3
                    ],
                    [
                        'status' => false,
                        'judge_id' => 4
                    ],
                    [
                        'status' => false,
                        'judge_id' => 5
                    ],
                ],
            ],
            [
                'level' => 'preliminary',
                'content' => 'Swimwear',
                'judges' => [
                    [
                        'status' => false,
                        'judge_id' => 2
                    ],
                    [
                        'status' => false,
                        'judge_id' => 3
                    ],
                    [
                        'status' => false,
                        'judge_id' => 4
                    ],
                    [
                        'status' => false,
                        'judge_id' => 5
                    ],
                ],
            ],
            [
                'level' => 'preliminary',
                'content' => 'Casual Interview',
                'judges' => [
                    [
                        'status' => false,
                        'judge_id' => 2
                    ],
                    [
                        'status' => false,
                        'judge_id' => 3
                    ],
                    [
                        'status' => false,
                        'judge_id' => 4
                    ],
                    [
                        'status' => false,
                        'judge_id' => 5
                    ],
                ],
            ],
            [
                'level' => 'preliminary',
                'content' => 'Formal Wear',
                'judges' => [
                    [
                        'status' => false,
                        'judge_id' => 2
                    ],
                    [
                        'status' => false,
                        'judge_id' => 3
                    ],
                    [
                        'status' => false,
                        'judge_id' => 4
                    ],
                    [
                        'status' => false,
                        'judge_id' => 5
                    ],
                ],
            ],
            [
                [
                    'level' => 'final',
                    'content' => 'Final Round',
                    'judges' => [
                        [
                            'status' => false,
                            'judge_id' => 2
                        ],
                        [
                            'status' => false,
                            'judge_id' => 3
                        ],
                        [
                            'status' => false,
                            'judge_id' => 4
                        ],
                        [
                            'status' => false,
                            'judge_id' => 5
                        ],
                    ],
                ]
            ]
        ];
    }
}

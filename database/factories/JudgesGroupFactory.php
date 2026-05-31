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
            'judges' => [
                [
                    'level' => 'preliminary',
                    'content' => 'Production Number',
                    'judges' => [
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 2
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 3
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 4
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 5
                        ],
                    ],
                ],
                [
                    'level' => 'preliminary',
                    'content' => 'Sports Wear',
                    'judges' => [
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 2
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 3
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 4
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 5
                        ],
                    ],
                ],
                [
                    'level' => 'preliminary',
                    'content' => 'Barong/Filipiana Competition',
                    'judges' => [
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 2
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 3
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 4
                        ],
                        [
                            'request_edit' => false,
                            'status' => true,
                            'judge_id' => 5
                        ],
                    ],
                ],
                // [
                //     'level' => 'preliminary',
                //     'content' => 'Formal Wear',
                //     'judges' => [
                //         [
                //             'request_edit' => false,
                //             'status' => true,
                //             'judge_id' => 2
                //         ],
                //         [
                //             'request_edit' => false,
                //             'status' => true,
                //             'judge_id' => 3
                //         ],
                //         [
                //             'request_edit' => false,
                //             'status' => true,
                //             'judge_id' => 4
                //         ],
                //         [
                //             'request_edit' => false,
                //             'status' => true,
                //             'judge_id' => 5
                //         ],
                //     ],
                // ],
                [
                    [
                        'level' => 'final',
                        'content' => 'Final Question and Answer',
                        'judges' => [
                            [
                                'request_edit' => false,
                                'status' => false,
                                'judge_id' => 2
                            ],
                            [
                                'request_edit' => false,
                                'status' => false,
                                'judge_id' => 3
                            ],
                            [
                                'request_edit' => false,
                                'status' => false,
                                'judge_id' => 4
                            ],
                            [
                                'request_edit' => false,
                                'status' => false,
                                'judge_id' => 5
                            ],
                        ],
                    ]
                ]
            ]

        ];
    }
}

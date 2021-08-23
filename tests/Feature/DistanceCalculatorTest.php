<?php

namespace Tests\Feature;

use Tests\TestCase;

class DistanceCalculatorTest extends TestCase
{
    public function test_can_calculate_yard_and_yard_to_yard()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'yard'
                ], [
                    'value' => 1.2,
                    'unit' => 'yard'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'yard'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.7,
                'unit' => 'yard'
            ]]);
    }

    public function test_can_calculate_yard_and_yard_to_meter()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'yard'
                ], [
                    'value' => 1.2,
                    'unit' => 'yard'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'meter'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.4689,
                'unit' => 'meter'
            ]]);
    }

    public function test_can_calculate_yard_and_meter_to_yard()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'yard'
                ], [
                    'value' => 1.2,
                    'unit' => 'meter'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'yard'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.8123,
                'unit' => 'yard'
            ]]);
    }

    public function test_can_calculate_yard_and_meter_to_meter()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'yard'
                ], [
                    'value' => 1.2,
                    'unit' => 'meter'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'meter'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.5716,
                'unit' => 'meter'
            ]]);
    }

    public function test_can_calculate_meter_and_yard_to_yard()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'meter'
                ], [
                    'value' => 1.2,
                    'unit' => 'yard'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'yard'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.8404,
                'unit' => 'yard'
            ]]);
    }

    public function test_can_calculate_meter_and_yard_to_meter()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'meter'
                ], [
                    'value' => 1.2,
                    'unit' => 'yard'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'meter'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.5973,
                'unit' => 'meter'
            ]]);
    }

    public function test_can_calculate_meter_and_meter_to_yard()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'meter'
                ], [
                    'value' => 1.2,
                    'unit' => 'meter'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'yard'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.9528,
                'unit' => 'yard'
            ]]);
    }

    public function test_can_calculate_meter_and_meter_to_meter()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'meter'
                ], [
                    'value' => 1.2,
                    'unit' => 'meter'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'meter'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.7,
                'unit' => 'meter'
            ]]);
    }

    public function test_can_calculate_mile_and_yard_to_mile()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'mile'
                ], [
                    'value' => 1.2,
                    'unit' => 'yard'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'mile'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 1.5007,
                'unit' => 'mile'
            ]]);
    }

    public function test_can_calculate_mile_and_mile_to_mile()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'mile'
                ], [
                    'value' => 1.2,
                    'unit' => 'mile'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'mile'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2.7,
                'unit' => 'mile'
            ]]);
    }

    public function test_can_calculate_mile_and_meter_to_meter()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'mile'
                ], [
                    'value' => 1.2,
                    'unit' => 'meter'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'meter'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2415.21,
                'unit' => 'meter'
            ]]);
    }

    public function test_can_calculate_yard_and_mile_to_yard()
    {
        $response = $this->postJson('api/calculate-distance', [
            'distances' => [
                [
                    'value' => 1.5,
                    'unit' => 'yard'
                ], [
                    'value' => 1.2,
                    'unit' => 'mile'
                ],
            ],
            'operation' => 'add',
            'response_unit' => 'yard'
        ]);

        $response->assertStatus(200)
            ->assertJson(['data' => [
                'value' => 2113.4948,
                'unit' => 'yard'
            ]]);
    }
}

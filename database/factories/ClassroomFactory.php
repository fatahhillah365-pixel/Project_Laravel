<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                '11 PPLG 1',
                '11 PPLG 2',
                '11 PPLG 3',
                '11 PPLG 4',
                '11 Animasi 1',
                '11 Animasi 2',
                '11 Animasi 3',
                '11 Animasi 4',
                '11 Dkv 1',
                '11 Dkv 2',
                '11 Dkv 3',
                '11 Dkv 4',

            ]),
            'major' => fake()->randomElement([
                'PPLG',
                'Animasi',
                'DKV',
            ]),
        ];
    }
}

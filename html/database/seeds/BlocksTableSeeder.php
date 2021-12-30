<?php

use Illuminate\Database\Seeder;
use App\Models\Block;

class BlocksTableSeeder extends Seeder
{
    public function run()
    {
        $blocks = [
            [
                'id' => uniqid(),
                'code' => 'B1',
                'title' => 'Initial Question Block'
            ],
            [
                'id' => uniqid(),
                'code' => 'B2',
                'title' => 'Tourism/Business Visa'
            ],
            [
                'id' => uniqid(),
                'code' => 'B3',
                'title' => 'Prior Travel for Business/Tourism Visa'
            ],
            [
                'id' => uniqid(),
                'code' => 'B4',
                'title' => 'Student Visas'
            ],
            [
                'id' => uniqid(),
                'code' => 'B5',
                'title' => 'Parents of Students'
            ],
            [
                'id' => uniqid(),
                'code' => 'B6',
                'title' => 'Relatives in the U.S'
            ]
        ];

        foreach ($blocks as $block)
        {
            Block::create($block);
        }
    }
}

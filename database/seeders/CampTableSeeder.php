<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title' => 'Super Premium',
                'slug' => 'super-premium',
                'price' => 500000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'title' => 'Mini Premium',
                'slug' => 'mini-premium',
                'price' => 150000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
        ];

        Camp::insert($camps);
    }
}
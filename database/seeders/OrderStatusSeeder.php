<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'   =>'In Process',
            ],
            [
                'name'   =>'Completed',
            ],
            [
                'name'   =>'Canceled',
            ],
        ];

        OrderStatus::insert($data);
    }
}

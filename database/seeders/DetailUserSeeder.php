<?php

namespace Database\Seeders;

use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id'           => 1,
                'photo'             => '',
                'role'              => 'seller',
                'contact_number'    => '',
                'biography'         => '',
            ],
            [
                'user_id'           => 1,
                'photo'             => '',
                'role'              => 'buyer',
                'contact_number'    => '',
                'biography'         => '',
            ],
        ];

        UserDetail::insert($data);
    }
}

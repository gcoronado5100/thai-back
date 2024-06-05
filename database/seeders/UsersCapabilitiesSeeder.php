<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersCapabilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_capabilities')->insert([
            [
                'user_id' => 1,
                'user_type_id' => 1,
                'pdv_id' => 1
            ],
            [
                'user_id' => 1,
                'user_type_id' => 1,
                'pdv_id' => 2
            ],
            [
                'user_id' => 2,
                'user_type_id' => 2,
                'pdv_id' => 1
            ],
            [
                'user_id' => 2,
                'user_type_id' => 2,
                'pdv_id' => 2
            ],
            [
                'user_id' => 3,
                'user_type_id' => 3,
                'pdv_id' => 1
            ],
            [
                'user_id' => 3,
                'user_type_id' => 3,
                'pdv_id' => 2
            ],
            [
                'user_id' => 4,
                'user_type_id' => 4,
                'pdv_id' => 1
            ],
            [
                'user_id' => 4,
                'user_type_id' => 4,
                'pdv_id' => 2
            ],
            [
                'user_id' => 5,
                'user_type_id' => 7,
                'pdv_id' => 1
            ],
            [
                'user_id' => 5,
                'user_type_id' => 7,
                'pdv_id' => 2
            ],
            [
                'user_id' => 6,
                'user_type_id' => 5,
                'pdv_id' => 2
            ],
            [
                'user_id' => 7,
                'user_type_id' => 5,
                'pdv_id' => 2
            ],
            [
                'user_id' => 8,
                'user_type_id' => 6,
                'pdv_id' => 2
            ],
            [
                'user_id' => 9,
                'user_type_id' => 5,
                'pdv_id' => 2
            ],
            [
                'user_id' => 10,
                'user_type_id' => 5,
                'pdv_id' => 2
            ],
            [
                'user_id' => 11,
                'user_type_id' => 5,
                'pdv_id' => 2
            ],
            [
                'user_id' => 12,
                'user_type_id' => 5,
                'pdv_id' => 2
            ],
            [
                'user_id' => 13,
                'user_type_id' => 5,
                'pdv_id' => 2
            ],
            [
                'user_id' => 14,
                'user_type_id' => 5,
                'pdv_id' => 2
            ],
        ]);
    }
}

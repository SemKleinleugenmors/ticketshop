<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {


        DB::table('tickets')->insert([
            [
                'movie_id' => 1,
                'user_id' => 1,
                'start' => '2022-05-26 16:15:00',
                'price' => 10.0,
                'room_id' => 1,
                'totalQty' => 80
            ],
            [
                'movie_id' => 1,
                'user_id' => 1,
                'start' => '2022-05-26 22:15:00',
                'price' => 10.0,
                'room_id' => 1,
                'totalQty' => 120
            ],
            [
                'movie_id' => 3,
                'user_id' => 1,
                'start' => '2022-05-26 22:00:00',
                'price' => 10.0,
                'room_id' => 1,
                'totalQty' => 80
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'No country for old men',
                'duration' => '120',
                'director' => 'Joel Coen',
                'country_id' => '1',
                'subtitle_id' => '1',
                'img_path' => 'static/2525020.jpg',
                'description' => 'Violence and mayhem ensue after a hunter stumbles upon a drug deal gone wrong and more than two million dollars in cash near the Rio Grande.',
                'year' => 1993
            ],
            [
                'title' => 'Dogtooth',
                'duration' => '120',
                'director' => 'Efthymis Filippou',
                'country_id' => '1',
                'subtitle_id' => '1',
                'img_path' => 'static/dt-3.jpg',
                'description' => 'A controlling, manipulative father locks his three adult offspring in a state of perpetual childhood by keeping them prisoner within the sprawling family compound.',
                'year' => 1993
            ],
            [
                'title' => 'Oldeuboi',
                'duration' => '120',
                'director' => 'Park Chan-wook',
                'country_id' => '1',
                'subtitle_id' => '1',
                'img_path' => 'static/oldboy-1200.jpg',
                'description' => 'After being kidnapped and imprisoned for fifteen years, Oh Dae-Su is released, only to find that he must find his captor in five days.',
                'year' => 1993
            ]
        ]);
    }
}

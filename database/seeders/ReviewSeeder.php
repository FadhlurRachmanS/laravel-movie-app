<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'poster' => 'movie-01.jpg',
            'movie' => 'Jojo Bizzare Adventure',
            'user' => 'Yanto',
            'rating' => '5.6',
            'date' => '12.12.2023',
        ]);
        Review::create([
            'poster' => 'movie-02.jpg',
            'movie' => ' Noragami',
            'user' => 'Siti',
            'rating' => '7.8',
            'date' => '10.11.2022'
        ]);
        Review::create([
            'poster' => 'movie-03.jpg',
            'movie' => ' Wind Breaker',
            'user' => 'Asep',
            'rating' => '8.0',
            'date' => '02.02.2024',
        ]);
        Review::create([
            'poster' => 'movie-04.jpg',
            'movie' => 'SPY X Family',
            'user' => 'Hilal',
            'rating' => '8.8',
            'date' => '08.08.2020',
        ]);
        Review::create([
            'poster' => 'movie-05.jpeg',
            'movie' => 'One Piece',
            'user' => 'Alex',
            'rating' => '9.0',
            'date' => '20.02.2020',
        ]);
    }
}

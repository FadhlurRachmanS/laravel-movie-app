<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [  
             'poster' => 'movie-01.jpg',
            'id' => 1,
            'name' => 'Jojo Bizzare Adventure',
            'user' => 'Yanto',
            'rating' => '5.6',
            'date' => '12.12.2023',
        ],
        [  
             'poster' => 'movie-02.jpg',
            'id' => 2,
            'name' => ' Noragami',
            'user' => 'Siti',
            'rating' => '7.8',
            'date' => '10.11.2022',
        ],
        [   
            'poster' => 'movie-03.jpg',
            'id' => 3,
            'name' => ' Wind Breaker',
            'user' => 'Asep',
            'rating' => '8.0',
            'date' => '02.02.2024',
        ],
        [
            'poster' => 'movie-04.jpg',
            'id' => 4,
            'name' => 'SPY X Family',
            'user' => 'Hilal',
            'rating' => '8.8',
            'date' => '08.08.2020',
        ],
        [   
            'poster' => 'movie-05.jpeg',
            'id' => 5,
            'name' => 'One Piece',
            'user' => 'Alex',
            'rating' => '9.0',
            'date' => '20.02.2020',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
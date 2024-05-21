<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'poster' => 'movie-01.jpg',
            'title' => 'Jojo Bizzare Adventure',
            'genre' => 'Shoumen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'poster' => 'movie-02.jpg',
            'title' => 'Noragami',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        [
            'poster' => 'movie-03.jpg',
            'title' => 'Wind Breaker',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings —hes only interested in the strongest of the strong.',
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
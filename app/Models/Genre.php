<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'poster' => 'movie-01.jpg',
            'name' => 'Jojo Bizzare Adventure',
            'deskription' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'id' => 2,
            'poster' => 'movie-02.jpg',
            'name' => 'Noragami',
            'deskription' => 'Noragami (ノラガミ) adalah sebuah serial manga Jepang karya Adachitoka yang memulai serialisasi di Monthly Shōnen Magazine pada Januari 2011. Sebuah adaptasi anime yang diproduksi oleh Bones tayang di Jepang sejak 5 Januari hingga 23 Maret 2014. Season kedua dengan judul Noragami Aragoto tayang di Jepang sejak 2 Oktober hingga 25 Desember 2015.',
        ],
        [
            'id' => 3,
            'poster' => 'movie-03.jpg',
            'name' => 'Wind Breaker',
            'deskription' => ' Webtoon Wind Breaker adalah tentang Jay saat dia melakukan perjalanan dalam hidupnya. Seiring berjalannya cerita, kita akan bertemu dengan teman-teman, saingan, cinta, dan berbagai macam petualangan yang ua jalani.',
        ],
        [
            'id' => 4,
            'poster' => 'movie-04.jpg',
            'name' => ' SPY X Family',
            'deskription' => 'Spy x Family mengisahkan tentang agen mata-mata terampil bernama sandi Twillight yang menjalankan Operasi Strix, yakni misi penting terkait perdamaian antarnegara mencakup Westalis di barat dan Ostania di timur.',
        ],
        [
            'id' => 5,
            'poster' => 'movie-05.jpeg',
            'name' => ' One Piece',
            'deskription' => 'One Piece (Jepang: ワンピース, Hepburn: Wan Pīsu) adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Eiichiro Oda. Manga ini telah dimuat di majalah Weekly Shōnen Jump milik Shueisha sejak tanggal 22 Juli 1997, dan telah dibundel menjadi 105 volume tankōbon hingga Maret 2023. Ceritanya mengisahkan petualangan Monkey D. Luffy, seorang anak laki-laki yang memiliki kemampuan tubuh elastis seperti karet setelah memakan Buah Iblis secara tidak disengaja. Luffy bersama kru bajak lautnya, yang dinamakan Bajak Laut Topi Jerami, menjelajahi Grand Line untuk mencari harta karun terbesar di dunia yang dikenal sebagai "One Piece" dalam rangka untuk menjadi Raja Bajak Laut yang berikutnya.',
        ],
       
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
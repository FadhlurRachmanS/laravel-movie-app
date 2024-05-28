<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Genreseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys',
        ]);
        
        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);
        
        Genre::create([
            'name' => 'School',
            'description' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]);
        Genre::create([
            'name' => 'Romantic',
            'description' => ' Romanticism is an artistic, literary and intellectual movement that originated in 18th century Western Europe during the Industrial Revolution. This movement was partly a revolution against the aristocratic, social and political norms of the Enlightenment period and a reaction against the rationalization of nature, in art and literature.',
        ]);
        Genre::create([
            'name' => 'Action',
            'description' => ' Action films are a film genre that mostly features chase scenes, fights, shootouts, explosions and stunts.',
        ]);
    }
}

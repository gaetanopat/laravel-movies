<?php

use Illuminate\Database\Seeder;
use App\Movie;
class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $movies = [
        [
          'title' => 'Madagascar',
          'genre_id' => '4',
          'plot' => 'Film di animazione',
          'release' => '2005'
        ],
        [
          'title' => 'Ip Man',
          'genre_id' => '3',
          'release' => '2008'
        ]
      ];
      foreach ($movies as $movie) {
        $nuovo_film = new Movie();
        $nuovo_film->fill($movie);
        $nuovo_film->save();
      }
    }
}

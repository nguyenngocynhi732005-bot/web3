<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // 7.6 - Phim thể loại Action
    public function action()
    {
        $movies = DB::table('movie')
            ->join('movie_genre', 'movie.id', '=', 'movie_genre.id_movie')
            ->join('genre', 'movie_genre.id_genre', '=', 'genre.id')
            ->where('genre.genre_name', 'Action')
            ->select(
                'movie.movie_name',
                'movie.release_date',
                'movie.overview',
                'movie.image_link'
            )
            ->get();

        return view('movies.action', compact('movies'));
    }
}
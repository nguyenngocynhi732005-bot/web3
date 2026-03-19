<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // 7.1 Hàm lấy danh sách thể loại
    public function getGenres()
    {
        $genres = DB::table('genre')->get();
        return view('movies.genres', compact('genres'));
    }

    // 7.2 Hàm lấy 10 bộ phim điểm cao nhất
    public function getTopRated()
    {
        $movies = DB::table('movie')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();

        return view('movies.list_simple', [
            'movies' => $movies,
            'title' => '10 bộ phim có điểm bình chọn cao nhất',
            'type' => 'vote'
        ]);
    }

    // 7.3: 10 bộ phim doanh thu cao nhất
    public function topBudget()
    {
        $movie = DB::table('movie')
            ->orderBy('budget', 'desc')
            ->limit(10)
            ->get();

        return view('movie.movies_budget', ['movie' => $movie]);
    }

    // 7.4: Phim dài hơn 120 phút
    public function longRuntime()
    {
        $movie = DB::table('movie')
            ->where('runtime', '>', 120)
            ->limit(10)
            ->get();

        return view('movie.movies_runtime', ['movie' => $movie]);
    }

    // 7.5 Hàm hiển thị phim Canada
    public function canada()
    {
        $movies = DB::table('movie')
            ->where('country_name', 'Canada')
            ->select('movie_name', 'release_date', 'runtime')
            ->get();

        return view('movie.canada', compact('movies'));
    }

    // 2. 7.6 - Phim thể loại Action
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

    // 7.7 Hàm lọc phim siêu phẩm
    public function getHighRatedMovies()
    {
        $movies = DB::table('movie')
            ->where('vote_average', '>', 8.0)
            ->where('vote_count', '>', 10000)
            ->get();

        return view('movies.list_table', [
            'movies' => $movies,
            'title' => 'Phim siêu phẩm (Điểm > 8 & Vote > 10k)'
        ]);
    }
}

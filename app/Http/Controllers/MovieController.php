<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // 1. Hàm hiển thị dữ liệu tổng hợp
    public function showData()
    {
        // Lấy danh sách thể loại (cho phần 7.1)
        $genres = DB::table('genre')->select('genre_name', 'genre_name_vn')->get();

        // Lấy danh sách phim (cho phần 7.2)
        $movies = DB::table('movie')
                    ->orderBy('vote_average', 'desc')
                    ->limit(10)
                    ->get();

        return view('movie.index', compact('genres', 'movies'));
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

    // 3. Hàm hiển thị phim Canada
    public function canada()
    {
        $movies = DB::table('movie')
            ->where('country_name', 'Canada')
            ->select('movie_name', 'release_date', 'runtime')
            ->get();

        return view('movie.canada', compact('movies'));
    }

    // 4. Hàm lấy danh sách thể loại
    public function getGenres()
    {
        $genres = DB::table('genre')->get();
        return view('movie.genres', compact('genres'));
    }

    // 5. Hàm lấy 10 bộ phim điểm cao nhất
    public function getTopRated()
    {
        $movies = DB::table('movie')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();

        return view('movie.list_simple', [
            'movies' => $movies,
            'title' => '10 bộ phim có điểm bình chọn cao nhất',
            'type' => 'vote'
        ]);
    }

    // 6. Hàm lọc phim siêu phẩm
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
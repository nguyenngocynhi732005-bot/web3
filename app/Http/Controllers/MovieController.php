<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class MovieController extends Controller
{
    // 1. Hàm hiển thị dữ liệu tổng hợp (Trang chủ)
    public function showData()
    {
        $genres = DB::table('genre')->select('genre_name', 'genre_name_vn')->get();
        $movies = DB::table('movie')
            ->select('movie_name', 'release_date', 'vote_average')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();

        return view('movie.index', compact('genres', 'movies'));
    }

    // 2. Hàm hiển thị phim Canada (Đã sửa từ 'movies.canada' thành 'movie.canada')
    public function canada()
    {
        $movies = DB::table('movie')
            ->where('country_name', 'Canada') 
            ->select('movie_name', 'release_date', 'runtime')
            ->get();

        return view('movie.canada', compact('movies'));
    }

    // 3. Hàm lấy danh sách thể loại
    public function getGenres() 
    {
        $genres = DB::table('genre')->get();
        return view('movie.genres', compact('genres'));
    }

    // 4. Hàm lấy 10 bộ phim điểm cao nhất
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

    // 5. Hàm lọc phim siêu phẩm
    public function getHighRatedMovies() 
    {
        $movies = DB::table('movie')
                    ->where('vote_average', '>', 8.0)
                    ->where('vote_count', '>', 10000)
                    ->get();

        return view('movie.list_table', [
            'movies' => $movies, 
            'title' => 'Phim siêu phẩm (Điểm > 8 & Vote > 10k)'
        ]);
    }
} 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // 7.1. Hiển thị danh sách các thể loại phim (Dùng view riêng)
    public function getGenres() {
        $genres = DB::table('genre')->get();
        return view('movies.genres', compact('genres'));
    }

    // 7.2. 10 bộ phim có điểm bình chọn cao nhất (Đã sửa lỗi truyền biến)
    public function getTopRated() {
        $movies = DB::table('movie')
                    ->orderBy('vote_average', 'desc')
                    ->limit(10)
                    ->get();
        
        // Cần truyền thêm title và type để list_simple.blade.php hoạt động
        return view('movies.list_simple', [
            'movies' => $movies, 
            'title' => '10 bộ phim có điểm bình chọn cao nhất', 
            'type' => 'vote' 
        ]);
    }
    

    // 7.7. Phim có điểm > 8.0 và lượt bình chọn > 10000 (Dạng bảng)
    public function getHighRatedMovies() {
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
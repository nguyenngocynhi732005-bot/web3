<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Cần thiết để dùng Query Builder

class MovieController extends Controller
{
    public function showData()
    {
        // Yêu cầu 7.1: Lấy danh sách thể loại từ bảng 'theloai'
        $genres = DB::table('genre')->select('genre_name', 'genre_name_vn')->get();

        // Yêu cầu 7.2: Lấy 10 bộ phim có điểm cao nhất từ bảng 'phim'
        $movies = DB::table('movie')
            ->select('movie_name', 'release_date', 'vote_average')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();

        // Trả về view movie/index.blade.php và truyền dữ liệu qua
        return view('movie.index', compact('genres', 'movies'));
    }

    public function canada()
    {
        $movies = DB::table('movie')
            ->where('country_name', 'Canada') 
            ->select('movie_name', 'release_date', 'runtime')
            ->get();

        return view('movies.canada', compact('movies'));
    }

    // 7.1. Hiển thị danh sách các thể loại phim (Dùng view riêng)
    public function getGenres() 
    {
        $genres = DB::table('genre')->get();
        return view('movies.genres', compact('genres'));
    }

    // 7.2. 10 bộ phim có điểm bình chọn cao nhất (Đã sửa lỗi truyền biến)
    public function getTopRated() 
    {
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
} // Dấu đóng ngoặc cuối cùng của Class
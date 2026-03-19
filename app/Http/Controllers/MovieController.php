<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Cần thiết để dùng Query Builder [cite: 604, 609]

class MovieController extends Controller
{
    public function showData()
    {
        // Yêu cầu 7.1: Lấy danh sách thể loại từ bảng 'theloai' [cite: 611]
        $genres = DB::table('genre')->select('genre_name', 'genre_name_vn')->get();

        // Yêu cầu 7.2: Lấy 10 bộ phim có điểm cao nhất từ bảng 'phim' [cite: 683]
        $movies = DB::table('movie')
            ->select('movie_name', 'release_date', 'vote_average')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();

        // Trả về view movie/index.blade.php và truyền dữ liệu qua [cite: 420, 442]
        return view('movie.index', compact('genres', 'movies'));
    }
}
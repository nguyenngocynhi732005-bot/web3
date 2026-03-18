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
    
    // 7.3. 10 bộ phim có ngân sách (budget) cao nhất
    public function getTopBudget() {
        $movies = DB::table('movie')->orderBy('budget', 'desc')->limit(10)->get();
        return view('movies.list_simple', [
            'movies' => $movies, 
            'title' => 'Top 10 phim ngân sách cao nhất', 
            'type' => 'budget'
        ]);
    }

    // 7.4. 10 bộ phim có thời lượng > 120 phút
    public function getLongMovies() {
        $movies = DB::table('movie')->where('runtime', '>', 120)->limit(10)->get();
        return view('movies.list_simple', [
            'movies' => $movies, 
            'title' => 'Top 10 phim trên 120 phút', 
            'type' => 'runtime'
        ]);
    }

    // 7.5. Các bộ phim của Canada
    public function getCanadaMovies() {
        $movies = DB::table('movie')->where('country_name', 'Canada')->get();
        return view('movies.list_simple', [
            'movies' => $movies, 
            'title' => 'Phim từ Canada', 
            'type' => 'runtime'
        ]);
    }

    // 7.6. Các bộ phim thuộc thể loại Action (Dạng bảng)
    public function getActionMovies() {
        $movies = DB::table('movie')
            ->join('movie_genre', 'movie.id', '=', 'movie_genre.id_movie')
            ->join('genre', 'genre.id', '=', 'movie_genre.id_genre')
            ->where('genre.genre_name', 'Action')
            ->select('movie.movie_name', 'movie.release_date', 'movie.overview', 'movie.image_link')
            ->get();

        return view('movies.list_table', [
            'movies' => $movies, 
            'title' => 'Danh sách phim hành động'
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
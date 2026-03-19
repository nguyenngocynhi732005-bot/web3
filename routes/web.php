<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======

>>>>>>> 6c9194d3c8fecd1bbc0db4e0f113884113603249
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/huakimngan', function () {
    return 'Hứa Kim Ngân';

// Route cho thành viên Nguyễn Ngọc Ý Nhi
Route::get('/nguyenngocynhi', function () {return 'Nguyễn Ngọc Ý Nhi';});
    return 'Nguyễn Ngọc Ý Nhi';
});

// Route cho thành viên Hồ Ngọc Quỳnh Anh
Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});

Route::get('/phim-canada', function () {
    // Truy vấn trực tiếp vào bảng chứa dữ liệu phim
    $movies = DB::table('movie') 
                ->where('country_name', 'Canada')
                ->get();

    return view('yeucau5', ['movies' => $movies]);
});

Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
});


// 7.1. Danh sách các thể loại phim
Route::get('/theloai', [MovieController::class, 'getGenres']);

// 7.2. 10 bộ phim có điểm bình chọn cao nhất
Route::get('/topphim', [MovieController::class, 'getTopRated']);

Route::get('/baitapNhi', [MovieController::class, 'showData']);Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
});

Route::get('/tranthingocan', function () {
    return 'Trần Thị Ngọc An';
// 7.3: 10 bộ phim doanh thu cao nhất
Route::get('/movies/top-budget', function () {
    $movie = DB::table('movie')
        ->orderBy('budget', 'desc')
        ->limit(10)
        ->get();
    return view('movie.movies_budget', ['movie' => $movie]);
});
});

// 7.4: Phim dài hơn 120 phút
Route::get('/movies/long-runtime', function () {
    $movie = DB::table('movie')
        ->where('runtime', '>', 120)
        ->limit(10)
        ->get();
    return view('movie.movies_runtime', ['movie' => $movie]);
});

//7.5: Phim Canada
Route::get('/movie/canada', [MovieController::class, 'canada']);


// 7.7. Phim siêu phẩm: Điểm > 8.0 và Vote > 10000 (Dạng bảng)
Route::get('/phimsieupham', [MovieController::class, 'getHighRatedMovies']);
=======
Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});

Route::get('/huakimngan', function () {
    return "HuaKimNgan";
});

// Route 7.6 - phim Action
Route::get('/movies/action', [MovieController::class, 'action']);
>>>>>>> 6c9194d3c8fecd1bbc0db4e0f113884113603249

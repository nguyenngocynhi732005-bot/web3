<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});
Route::get('/huakimngan', function () {
    return "HuaKimNgan";

// Route cho thành viên Nguyễn Ngọc Ý Nhi
Route::get('/nguyenngocynhi', function () {return 'Nguyễn Ngọc Ý Nhi';});


    return 'Nguyễn Ngọc Ý Nhi';
});
Route::get('/phim-canada', function () {
    // Truy vấn trực tiếp vào bảng chứa dữ liệu phim
    $movies = DB::table('movie') // Nhớ đổi 'movie' thành tên bảng thực tế của bạn nếu khác nhé
                ->where('country_name', 'Canada')
                ->get();

    return view('yeucau5', ['movies' => $movies]);
});
use Illuminate\Support\Facades\DB;

// 7.3: 10 bộ phim doanh thu cao nhất
Route::get('/movies/top-budget', function () {
    $movie = DB::table('movie')
        ->orderBy('budget', 'desc')
        ->limit(10)
        ->get();
    return view('movie.movies_budget', ['movie' => $movie]);
});

// 7.4: Phim dài hơn 120 phút
Route::get('/movies/long-runtime', function () {
    $movie = DB::table('movie')
        ->where('runtime', '>', 120)
        ->limit(10)
        ->get();
    return view('movie.movies_runtime', ['movie' => $movie]);
});
Route::get('/nguyenngocynhi', function () {return 'Nguyễn Ngọc Ý Nhi';});

use App\Http\Controllers\MovieController;

Route::get('/movies/canada', [MovieController::class, 'canada']);


// Route cho thành viên Hồ Ngọc Quỳnh Anh
Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});
use App\Http\Controllers\MovieController;

Route::get('/baitapNhi', [MovieController::class, 'showData']);Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
});


<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Thành viên
Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
});

Route::get('/huakimngan', function () {
    return 'Hứa Kim Ngân';
});

Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});

Route::get('/tranthingocan', function () {
    return 'Trần Thị Ngọc An';
});

Route::get('/nguyenphuonganh', function () {
    return 'Nguyễn Phương Anh';
});

// Phim Canada (query DB)
Route::get('/phim-canada', function () {
    $movies = DB::table('movie')
        ->where('country_name', 'Canada')
        ->get();

    return view('yeucau5', ['movies' => $movies]);
});

// Route sách
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get("/thongtinsach","App\Http\Controllers\Book@sach");
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');

// MovieController
Route::get('/theloai', [MovieController::class, 'getGenres']);
Route::get('/topphim', [MovieController::class, 'getTopRated']);
Route::get('/top-budget', [MovieController::class, 'topBudget']);
Route::get('/long-runtime', [MovieController::class, 'longRuntime']);
Route::get('/canada', [MovieController::class, 'canada']);
Route::get('/action', [MovieController::class, 'action']);
Route::get('/phimsieupham', [MovieController::class, 'getHighRatedMovies']);
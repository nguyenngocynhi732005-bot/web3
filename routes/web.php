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

// Route cho thành viên Nguyễn Ngọc Ý Nhi
Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
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

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
Route::get('/nguyenngocynhi', function () {return 'Nguyễn Ngọc Ý Nhi';});



Route::get('/phim-canada', function () {
    // Truy vấn trực tiếp vào bảng chứa dữ liệu phim
    $movies = DB::table('movie') // Nhớ đổi 'movie' thành tên bảng thực tế của bạn nếu khác nhé
                ->where('country_name', 'Canada')
                ->get();

    return view('yeucau5', ['movies' => $movies]);
});
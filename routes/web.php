<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Support\Facades\DB; 

>>>>>>> b3146831a15117fc6a08a2d98eb9b8e54687b83e
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
<<<<<<< HEAD



Route::get('/phim-canada', function () {
    // Truy vấn trực tiếp vào bảng chứa dữ liệu phim
    $movies = DB::table('movie') // Nhớ đổi 'movie' thành tên bảng thực tế của bạn nếu khác nhé
                ->where('country_name', 'Canada')
                ->get();

    return view('yeucau5', ['movies' => $movies]);
});

=======
use App\Http\Controllers\MovieController;

// Route::get('/baitapNhi', [MovieController::class, 'showData']);
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');

Route::get("/thongtinsach","App\Http\Controllers\Book@sach");

Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');
>>>>>>> b3146831a15117fc6a08a2d98eb9b8e54687b83e

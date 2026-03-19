<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
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



Route::get('nguyenphuonganh', function () {
    return 'Nguyễn Phương Anh';
});
Route::get('/huakimngan', function () {
    return 'Hứa Kim Ngân';
});


Route::get('/tranthingocan', function () {
    return 'Trần Thị Ngọc An';
});


Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
});



// 7.1. Danh sách các thể loại phim
Route::get('/theloai', [MovieController::class, 'getGenres']);

// 7.2. 10 bộ phim có điểm bình chọn cao nhất
Route::get('/topphim', [MovieController::class, 'getTopRated']);


// 7.7. Phim siêu phẩm: Điểm > 8.0 và Vote > 10000 (Dạng bảng)
Route::get('/phimsieupham', [MovieController::class, 'getHighRatedMovies']);
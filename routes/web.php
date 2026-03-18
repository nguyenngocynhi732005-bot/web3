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
Route::get('/the-loai', [MovieController::class, 'getGenres']);

// 7.2. 10 bộ phim có điểm bình chọn cao nhất
Route::get('/top-phim', [MovieController::class, 'getTopRated']);

// 7.3. 10 bộ phim có ngân sách (budget) cao nhất
Route::get('/top-ngan-sach', [MovieController::class, 'getTopBudget']);

// 7.4. 10 bộ phim có thời lượng > 120 phút
Route::get('/phim-dai', [MovieController::class, 'getLongMovies']);

// 7.5. Các bộ phim của Canada
Route::get('/phim-canada', [MovieController::class, 'getCanadaMovies']);

// 7.6. Các bộ phim thuộc thể loại Action (Dạng bảng)
Route::get('/phim-hanh-dong', [MovieController::class, 'getActionMovies']);

// 7.7. Phim siêu phẩm: Điểm > 8.0 và Vote > 10000 (Dạng bảng)
Route::get('/phim-sieu-pham', [MovieController::class, 'getHighRatedMovies']);
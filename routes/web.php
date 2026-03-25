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

<<<<<<< HEAD

Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');

// ==========================================
// 1. CÁC ROUTE THÔNG TIN THÀNH VIÊN
// ==========================================
=======
Route::get('/huakimngan', function () {
    return 'Hứa Kim Ngân';
});

>>>>>>> remotes/origin/QuynhAnh
Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
});

Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});


Route::get('/nguyenphuonganh', function () {
    return 'Nguyễn Phương Anh';
});


<<<<<<< HEAD
Route::get('/sach', 'App\Http\Controllers\ViduLayoutController@sach');
Route::get("/thongtinsach", "App\Http\Controllers\Book@sach");
Route::get('/sach/theloai/{id}', 'App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}', 'App\Http\Controllers\ViduLayoutController@chitiet');

=======
// Route::get('/phim-canada', function () {
//     // Truy vấn trực tiếp vào bảng chứa dữ liệu phim
//     $movies = DB::table('movie')
//         ->where('country_name', 'Canada')
//         ->get();

//     return view('yeucau5', ['movies' => $movies]);
// });



// // 7.1. Danh sách các thể loại phim
// Route::get('/theloai', [MovieController::class, 'getGenres']);

// // 7.2. 10 bộ phim có điểm bình chọn cao nhất
// Route::get('/topphim', [MovieController::class, 'getTopRated']);


// // 7.3: 10 bộ phim doanh thu cao nhất
// Route::get('/top-budget', [MovieController::class, 'topBudget']);


// // 7.4: Phim dài hơn 120 phút
// Route::get('/long-runtime', [MovieController::class, 'longRuntime']);

// //7.5: Phim Canada
// Route::get('/canada', [MovieController::class, 'canada']);

// // Route 7.6 - phim Action
// //có bảng
// Route::get('/action', [MovieController::class, 'action']);


// // 7.7. Phim siêu phẩm: Điểm > 8.0 và Vote > 10000 (Dạng bảng)
// //có bảng
// Route::get('/phimsieupham', [MovieController::class, 'getHighRatedMovies']);

// Route::get('/baitapNhi', [MovieController::class, 'showData']);
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');

Route::get("/thongtinsach","App\Http\Controllers\Book@sach");

Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet'); 



>>>>>>> remotes/origin/QuynhAnh

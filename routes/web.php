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
// ==========================================
// 1. CÁC ROUTE THÔNG TIN THÀNH VIÊN
// ==========================================

Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
});

Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});


Route::get('/nguyenphuonganh', function () {
    return 'Nguyễn Phương Anh';
});

Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');

Route::get("/thongtinsach","App\Http\Controllers\Book@sach");

Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet'); 

?>
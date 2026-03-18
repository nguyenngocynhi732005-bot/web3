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



Route::get('nguyenphuonganh', function () {
    return 'Nguyễn Phương Anh';
});

Route::get('/tranthingocan', function () {
    return 'Trần Thị Ngọc An';
});

// Route cho thành viên Nguyễn Ngọc Ý Nhi
Route::get('/nguyenngocynhi', function () {
    return 'Nguyễn Ngọc Ý Nhi';
});

// Route cho thành viên Hồ Ngọc Quỳnh Anh
Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});

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

Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});
<<<<<<< .mine
Route::get('/huakimngan', function () {
    return "HuaKimNgan";
});







=======

use App\Http\Controllers\MovieController;

Route::get('/movies/canada', [MovieController::class, 'canada']);






<<<<<<< HEAD
// Route cho thành viên Hồ Ngọc Quỳnh Anh
Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});
=======
>>>>>>> .theirs
>>>>>>> 445a691e7557a023d91bfdb6f67ba556c8c6b166

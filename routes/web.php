<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/hongocquynhanh', function () {
    return 'Hồ Ngọc Quỳnh Anh';
});

Route::get('/huakimngan', function () {
    return "HuaKimNgan";
});

// Route 7.6 - phim Action
Route::get('/movies/action', [MovieController::class, 'action']);
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 因為是用vue router 這邊的router不用
// 必須讓後面不管打什麼都可以連接到welcome頁面
// 不然會出現404頁面
Route::get('/{any}', function () {
    return view('welcome');
})->where("any", ".*");
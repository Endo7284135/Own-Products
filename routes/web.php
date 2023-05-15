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

 Route::get('/', function () {
     return view('welcome');
 });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('items')->group(function () {
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'create']);
    Route::post('/add',[App\Http\Controllers\ItemController::class, 'store']);
    Route::get('/item_edit/{id}',[App\Http\Controllers\ItemController::class, 'edit']);
    Route::post('/update',[App\Http\Controllers\ItemController::class, 'update']);
    Route::get('/destroy/{id}',[App\Http\Controllers\ItemController::class, 'destroy']);

    Route::get('/ajax/like/user_list', 'LikeController@user_list'); // 👈 ユーザー情報を取得
    Route::post('/ajax/like', 'LikeController@like'); // 👈 いいね！データを追加
});

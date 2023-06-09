<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    if(Auth::check()){return redirect('/home');}
    return view('auth.login');
 });

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('searches.index');
    Route::get('/search/detail/{id}', [App\Http\Controllers\SearchController::class, 'detail']);
});

Route::middleware(['auth','can:admin'])->group(function(){
    Route::get('/item', [App\Http\Controllers\ItemController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'create']);
    Route::post('/add',[App\Http\Controllers\ItemController::class, 'store']);
    Route::get('/item_edit/{id}',[App\Http\Controllers\ItemController::class, 'edit']);
    Route::post('/update',[App\Http\Controllers\ItemController::class, 'update']);
    Route::get('/destroy/{id}',[App\Http\Controllers\ItemController::class, 'destroy']);
});
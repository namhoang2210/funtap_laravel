<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
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
    return view('pages.home.index');
})->name('home');

Route::get('/news', [PostController::class, 'index'])->name('news');

//Route::get('/login',[LoginController::class, 'showLoginForm'])->name('login');
//Route::post('/login',[LoginController::class, 'login']);
//Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin','as' => 'admin.'],function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/posts', [PostController::class, 'show'])->name('posts');
});

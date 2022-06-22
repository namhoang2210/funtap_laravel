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

Route::group(['prefix' => 'news','as' => 'news.'],function () {
    Route::get('/', [PostController::class, 'index'])->name('list');
    Route::get('/{new}', [PostController::class, 'findById'])->name('read');
});

//Route::get('/login',[LoginController::class, 'showLoginForm'])->name('login');
//Route::post('/login',[LoginController::class, 'login']);
//Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin','as' => 'admin.'],function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');

    Route::group(['prefix' => 'posts','as' => 'posts.'],function () {
        Route::get('/', [PostController::class, 'show'])->name('show');
        Route::get('/formCreate', [PostController::class, 'loadFormCreate'])->name('loadFormCreate');
        Route::post('/create', [PostController::class, 'create'])->name('create');
        Route::get('/view/{post}', [PostController::class, 'view'])->name('view');
        Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
        Route::post('/update/{post}', [PostController::class, 'update'])->name('update');
        Route::get('/delete/{post}', [PostController::class, 'delete'])->name('delete');
    });
});

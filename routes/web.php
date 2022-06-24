<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'news','as' => 'news.'],function () {
    Route::get('/', [PostController::class, 'index'])->name('list');
    Route::get('/{new}', [PostController::class, 'findById'])->name('read');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
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

    Route::group(['prefix' => 'about','as' => 'about.'],function () {
        Route::get('/', [AboutController::class, 'getListAbout'])->name('list');
        Route::get('/edit/{about}', [AboutController::class, 'getAboutById'])->name('edit');
        Route::post('/create', [AboutController::class, 'create'])->name('create');
        Route::post('/store', [AboutController::class, 'store'])->name('store');
        Route::post('/update/{about}', [AboutController::class, 'update'])->name('update');
        Route::get('delete/{about}', [AboutController::class, 'delete'])->name('delete');
    });
});

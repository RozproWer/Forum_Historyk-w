<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ThreadController;
use App\Http\Controllers\Pages\TagController;
use App\Http\Controllers\PageController;

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

require 'admin.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'threads', 'as' => 'threads.'], function(){


    // /threads
    // threads.*
    Route::get('/', [ThreadController::class, 'index'])->name('index');
    Route::get('create', [ThreadController::class, 'create'])->name('create');
    Route::post('/', [ThreadController::class, 'store'])->name('store');
    Route::get('/{thread:slug}/edit', [ThreadController::class, 'edit'])->name('edit');
    Route::get('/{category:slug}/{thread:slug}', [ThreadController::class, 'show'])->name('show');

    Route::group(['as' => 'tags.'], function () {
        Route::get('/{tag:slug}', [TagController::class, 'index'])->name('index');
    });
});

Route::get('dashboard/users', [PageController::class, 'users'])->name('users');

Route::get('/dashboard/categories/index', [PageController::class, 'categoriesIndex'])->name('categories.index');
Route::get('/dashboard/categories/create', [PageController::class, 'categoriesCreate'])->name('categories.create');

// Route::get('/dashboard/threads/index', [PageController::class, 'threadsIndex'])->name('threads.index');
// Route::get('/dashboard/threads/create', [PageController::class, 'threadsCreate'])->name('threads.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

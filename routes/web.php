<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/input', [ContentController::class, 'input'])->name('input');

Route::post('/save', [ContentController::class, 'save'])->name('save');

Route::get('/index', [ContentController::class, 'index'])->name('index');

Route::get('/{id}', [ContentController::class, 'show'])->name('show');

// Route::get('/content/edit',[ContentController::class, 'edit'])->name('content_edit');

// Route::post('/content/edit',[ContentController::class, 'update'])->name('content_update');

Route::get('/edit/{id}',[ContentController::class, 'edit'])->name('edit');
Route::post('/update',[ContentController::class, 'update'])->name('update');
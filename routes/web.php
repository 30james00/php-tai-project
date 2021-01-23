<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

//PhotoController routes
Route::get('/photo-upload/create', [PhotoController::class, 'create'])->middleware(['auth'])->name('photo-upload-create');
Route::post('/photo-upload/store', [PhotoController::class, 'store'])->middleware(['auth'])->name('photo-upload-store');
Route::get('/photo-view', [PhotoController::class, 'index'])->middleware(['auth'])->name('photo-view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

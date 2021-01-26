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
    return view('home');
})->name('home');

//PhotoController routes
Route::get('photos/image/{path}', [PhotoController::class, 'showImage'])->middleware(['auth'])->name('photos.showImage');
Route::resource('photos', PhotoController::class)->middleware(['auth']);

//language settings
Route::get('locale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->middleware('locale')->name('locale.setting');

require __DIR__.'/auth.php';

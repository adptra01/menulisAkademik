<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

Route::post('/image-upload', [AcademyController::class, 'storeImage'])->name('image.upload');
Route::get('/materials', [HomeController::class, 'materials'])->name('materials');
Route::prefix('/academy')->group(function () {
    Route::get('/', [AcademyController::class, 'index'])->name('academy');
    Route::post('/', [AcademyController::class, 'store'])->name('academy.store');
    Route::get('/{slug}', [AcademyController::class, 'show'])->name('academy.show');
    Route::put('/{slug}', [AcademyController::class, 'update'])->name('academy.update');
    Route::delete('/{slug}', [AcademyController::class, 'destroy'])->name('academy.destroy');
});

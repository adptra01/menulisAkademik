<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\ArgumentCategoryController;
use App\Http\Controllers\ArgumentController;
use App\Http\Controllers\HomeController;
use App\Models\Academy;
use App\Models\Argument;
use App\Models\ArgumentCategory;
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


Route::get('/', function () {
    $arguments = Argument::inRandomOrder()->limit(3)->get();
    $academies = Academy::inRandomOrder()->limit(3)->get();

    return view('welcome', [
        'random' => [
            'academies' => $academies,
            'arguments' => $arguments,
        ],
    ]);

});
Route::get('/courses-academies', [HomeController::class, 'academies'])->name('courses.academies');
Route::get('/courses-arguments', [HomeController::class, 'arguments'])->name('courses.arguments');

Route::get('courses/{slug}', [HomeController::class, 'details'])->name('details');


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/image-upload', [AcademyController::class, 'storeImage'])->name('image.upload');
    Route::get('/materials', [HomeController::class, 'materials'])->name('materials');
});



Route::prefix('/academies')->group(function () {
    Route::get('/', [AcademyController::class, 'index'])->name('academy');
    Route::post('/', [AcademyController::class, 'store'])->name('academy.store');
    Route::get('/{slug}', [AcademyController::class, 'show'])->name('academy.show');
    Route::put('/{slug}', [AcademyController::class, 'update'])->name('academy.update');
    Route::delete('/{slug}', [AcademyController::class, 'destroy'])->name('academy.destroy');
});


Route::prefix('/arguments')->group(function () {
    Route::get('/', [ArgumentController::class, 'index'])->name('argument');
    Route::post('/', [ArgumentController::class, 'store'])->name('argument.store');
    Route::get('/{slug}', [ArgumentController::class, 'show'])->name('argument.show');
    Route::put('/{slug}', [ArgumentController::class, 'update'])->name('argument.update');
    Route::delete('/{slug}', [ArgumentController::class, 'destroy'])->name('argument.destroy');
});

Route::prefix('/argument-categories')->group(function () {
    Route::get('/', [ArgumentCategoryController::class, 'index'])->name('argumentCategory');
    Route::post('/', [ArgumentCategoryController::class, 'store'])->name('argumentCategory.store');
    Route::get('/{slug}', [ArgumentCategoryController::class, 'show'])->name('argumentCategory.show');
    Route::put('/{slug}', [ArgumentCategoryController::class, 'update'])->name('argumentCategory.update');
    Route::delete('/{slug}', [ArgumentCategoryController::class, 'destroy'])->name('argumentCategory.destroy');
});

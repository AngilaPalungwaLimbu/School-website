<?php

use App\Http\Controllers\Backend\BedController;
use App\Http\Controllers\Backend\FacultyController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\SchoolController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/school', SchoolController::class);
Route::resource('/post', PostController::class);
Route::resource('/faculty', FacultyController::class);
Route::resource('/subject', SubjectController::class);
Route::resource('/bed', BedController::class);
Route::resource('/room', RoomController::class);


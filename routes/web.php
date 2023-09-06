<?php

use App\Http\Controllers\CreatorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->user()->premission == 'user') {
        return view('creator.index');
    } elseif (auth()->user()->premission == 'viewer') {
        return view('viewer.index');
    }
    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'check.creator'])->group(function () {
    Route::get('/creator/index', [CreatorController::class, 'index']);
    Route::get('/products/search', [CreatorController::class, 'search'])->name('search');
});

Route::middleware(['auth', 'check.viewer'])->group(function () {
    Route::get('/viewer/index', [ViewerController::class, 'index']);
});

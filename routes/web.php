<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\controllers\myController;
use App\http\controllers\adminController;

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
Route::get('/',[myController::class,'home'])->name('welcome.home');
Route::get('/admin/login',[myController::class,'adminLogin'])->name('admin.login');
Route::get('/admin/register',[myController::class,'adminRegister'])->name('admin.register');
Route::post('/store/register',[myController::class,'storeRegister'])->name('store.register');
Route::post('/admin/logging',[myController::class,'adminLogging'])->name('admin.logging');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

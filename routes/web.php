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
Route::get('/admin/dashboard',[myController::class,'adminDashboard'])->name('admin.dashboard');
Route::get('/super/admin/dashboard',[myController::class,'superAdminDashboard'])->name('super.admin.dashboard');
Route::get('/user/dashboard',[myController::class,'userDashboard'])->name('user.dashboard');
Route::get('/alllogout',[myController::class,'alllogout'])->name('all.logout');




// In web.php or routes file
Route::middleware(['superadmin'])->group(function () {
    // Routes requiring super admin approval
    Route::get('/admin/posts/approval', 'myController@approvalForm')->name('posts.approval.form');
    Route::post('/admin/posts/approve/{id}', 'myController@approvePost')->name('posts.approve');
    // ... other routes ...
});




Route::post('/store/post',[myController::class,'storePost'])->name('store.post');

Route::get('/edit/post/{id}',[myController::class,'editPost'])->name('edit.post');
Route::post('/update/post',[myController::class,'updatePost'])->name('update.post');
Route::get('/delete/post/{id}',[myController::class,'deletePost'])->name('delete.post');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

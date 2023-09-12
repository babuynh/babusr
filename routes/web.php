<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('register',[LoginController::class,'register'])->name('register');
Route::post('register/post',[LoginController::class,'register_store'])->name('register-store');

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('login/post',[LoginController::class,'login_post'])->name('login-post');
Route::group(['middleware'=>'auth:web'],function(){
    Route::get('dashboard',[LoginController::class,'dashboard'])->name('dashboard');
    //blogs  

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
//change-password
Route::get('change-password',[LoginController::class,'changepassword'])->name('change-password');
Route::post('change-password-post',[LoginController::class,'changePasswordpost'])->name('change-password-post');
Route::get('userlist',[HomeController::class,'userlist'])->name('userlist');
//email verify
Route::post('/admin/verify-email/{user}', [LoginController::class, 'verifyEmail'])->name('admin.verify.email');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
});
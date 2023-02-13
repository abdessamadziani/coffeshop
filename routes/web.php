<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/',[ProductController::class,'welc']);



 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/admins.dashboard',[AdminController::class,'index'])->name('admins.dashboard');
Route::get('/admins.create',[ProductController::class,'create'])->name('admins.create');
Route::get('/admins/edit/{id}',[ProductController::class,'edit'])->name('admins.edit');
Route::get('/admins/delete/{id}',[ProductController::class,'destroy'])->name('admins.delete');





Auth::routes();


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
        Route::get('/dashboard',[ProductController::class,'index'])->name('dashboard');
});



Route::get('/admins.signup', [App\Http\Controllers\ProductController::class, 'index']);
Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::post('/update',[App\Http\Controllers\ProductController::class,'update'])->name('update');




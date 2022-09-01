<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AdminController;
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
    return view('auth.login');
});



Route:: resource('producto',ProductosController::class)->middleware('auth');
Auth::routes(['reset'=>false]);

Route::get('/home', [ProductosController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
        Route::get('/home', [ProductosController::class, 'abc'])->name('admin');

    
}

);







// Route::get('/admin',[AdminController::class,'index'])
//         ->middleware('auth.admin')
//         ->name('admin.index');
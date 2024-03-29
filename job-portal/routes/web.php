<?php

use App\Http\Controllers\ProfileController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    
    Route::match(['get','post'],'login','AdminController@login');

    Route::group(['middleware'=>['admin']], function(){
        Route::get('dashboard','AdminController@dashboard');
        Route::match(['get','post'],'update-admin-password','AdminController@updateAdminPassword');
        Route::post('check-admin-password','AdminController@checkAdminPassword');
        Route::match(['get','post'],'update-admin-details','AdminController@updateAdminDetails');
        Route::match(['get','post'],'update-employer-details/{slug}','AdminController@updateEmployerDetails');
        Route::get('logout','AdminController@logout');
    });
});
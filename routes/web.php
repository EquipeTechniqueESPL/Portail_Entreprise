<?php

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
    return view('auth/login');
});



Route::get('/mes_infos',function(){
    return view('mes_infos');
});

Route::get('mon_formulaire', function(){
    return view('mon_formulaire');
})->name('mon_formulaire');



Route::group(['middleware' =>'auth'],function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile',function(){
        return view ('profile');
    })->name('profile');
});
require __DIR__.'/auth.php';

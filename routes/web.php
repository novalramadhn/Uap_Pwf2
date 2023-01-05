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


Route::get('/', function(){
    return view ('dosen/v_profil');
});

Route::group(['prefix' => '/', 'as'=> 'dosen.'], function(){
    Route::get('/profil', function(){
        return view ('dosen/v_profil');
    })->name('profil');
    Route::get('/data_pengampu', function(){
        return view('dosen/v_ampu');
    })->name('ampu');

});

<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/
use Illuminate\Support\Facades\Route;

Route::get('/', 'frontendController@index');
Route::get('opdDetail/{id}', 'frontendController@opdDetail')->name('opdDetail');
Route::get('cari/{id}', 'frontendController@cari');
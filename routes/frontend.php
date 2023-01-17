<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/
use Illuminate\Support\Facades\Route;

Route::get('/', 'frontendController@index');
Route::get('opd/{id}', 'frontendController@opdDetail')->name('opdDetail');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\FamiliesController@index')->name('families.index');
Route::get('/show/{id}', '\App\Http\Controllers\FamiliesController@show')->name('families.show');
Route::get('/create', '\App\Http\Controllers\FamiliesController@create');
Route::get('/parent/create', '\App\Http\Controllers\FamiliesController@createParent');
Route::get('/edit', '\App\Http\Controllers\FamiliesController@edit');
Route::post('/action/create', '\App\Http\Controllers\FamiliesController@doCreate');
Route::post('/action/edit', '\App\Http\Controllers\FamiliesController@doEdit');
Route::get('/delete/{id}', '\App\Http\Controllers\FamiliesController@delete');
Route::post('/action/createParent', '\App\Http\Controllers\FamiliesController@doCreateParent')->name('addParent');

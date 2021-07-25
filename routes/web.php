<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\taskcontroller@index');
Route::get('/tasks', 'App\Http\Controllers\taskcontroller@index');
Route::get('/tasks/create', 'App\Http\Controllers\taskcontroller@create');



Route::post('/tasks', 'App\Http\Controllers\taskcontroller@store');

Route::patch('/tasks/{id}','App\Http\Controllers\taskcontroller@update');
Route::delete('/tasks/{id}', 'App\Http\Controllers\taskcontroller@delete');
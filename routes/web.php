<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home')->name('home');
Route::get('personas', 'App\Http\Controllers\Personas2Controller@index')->name('personas.index');
Route::get('personas/crear', 'App\Http\Controllers\Personas2Controller@create')->name('personas.create');
Route::post('personas', 'App\Http\Controllers\Personas2Controller@store')->name('personas.store');
Route::get('personas/{id}', 'App\Http\Controllers\Personas2Controller@show')->name('personas.show');

Route::view('contacto','contacto')->name('contacto');

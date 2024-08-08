<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home')->name('home');

Route::resource('personas','App\Http\Controllers\Personas2Controller')->names('personas')->middleware('auth');
Route::get('categorias/{category}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');
/*
Route::get('personas', 'App\Http\Controllers\Personas2Controller@index')->name('personas.index');
Route::get('personas/crear', 'App\Http\Controllers\Personas2Controller@create')->name('personas.create');
Route::get('personas/{id}/editar', 'App\Http\Controllers\Personas2Controller@edit')->name('personas.edit');
Route::patch('personas/{id}', 'App\Http\Controllers\Personas2Controller@update')->name('personas.update');
Route::post('personas', 'App\Http\Controllers\Personas2Controller@store')->name('personas.store');
Route::get('personas/{id}', 'App\Http\Controllers\Personas2Controller@show')->name('personas.show');
Route::delete('personas/{persona}', 'App\Http\Controllers\Personas2Controller@destroy')->name('personas.destroy');
*/
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');
Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

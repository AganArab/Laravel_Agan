<?php

use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

use laragon\www\laravel_agan\resources\views\belajarblade;




Route::get('/belajar', function () {
    return view('belajar');
});

Route::get('/bikin_form', function () {
  return view('bikin_form');
});

Route::get('/welcome', function () {
  return view('welcome');
});

route::get('/master', function() {
  return view('template.master');
});

route::get('/master', function() {
  return view('template.master');
});

route::get('/', function() {
  return view('index');
});

// route untuk menampilkan tambah genre
// dan handlermya / method  yang digunakan adalah method create
Route::controller(GenreController::class)->group(function () {
  Route::get('/genre', 'index')->name('genre.index');
  Route::get('/genre/create', 'create')->name('genre.create');
  Route::post('/genre', 'store')->name('genre.store');
  Route::get('/genre/{id}/edit', 'edit')->name('genre.edit'); 
  Route::get('/genre/{id}', 'show')->name('genre.show');
  Route::put('/genre/{id}', 'update')->name('genre.update');
  Route::delete('/genre/{id}', 'delete')->name('genre.delete');
});
<?php

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

route::get('/index', function() {
  return view('index');
});


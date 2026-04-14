<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/cursos', function () {
    return view('cursos');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::post('/contato', function (Request $request) {
    return view('contato');
});
Route::get('/sobre-nos', function () {
    return view('sobre-nos');
});

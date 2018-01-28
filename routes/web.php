<?php

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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/contatos.blade.php', function(){
    return view('contatos');
});

Route::get('/inicio.blade.php', function(){
    return view('inicio');
});

Route::get('/fanclub.blade.php', function(){
    return view('fanclub');
});

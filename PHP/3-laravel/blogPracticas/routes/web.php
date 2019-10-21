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
    return view('welcome');
});

Route::get('/Bienvenidos', function () {
    return "Hola Mundo!!";
});

Route::get('/fotos', function () {
    return "Estás en la galería de fotos";
});

Route::get('/fotos/{numero}', function ($numero) {
    return "Estás en la galería de fotos: ".$numero;
});

Route::get('/fotos/{numero?}', function ($numero = 'sin numero') {
    return "Estás en la galería de fotos: ".$numero;
});

Route::get('/fotos/{numero?}', function ($numero = 'sin numero') {
    return "Estás en la galería de fotos: ".$numero;
})->where('numero', '[0-9]+');

Route::view('galeria', 'fotos');

Route::get('fotos', function(){
    return view('fotos');
})->name('foto');

Route::get('blog', function(){
    return view('blog');
})->name('noticias');

Route::get('nosotros/{nombre?}', function($nombre = null){
    $equipo = ['Saul', 'Daniel', 'Isidro', 'Jéssica'];

    return view('nosotros',compact('equipo', 'nombre'));
})->name('nosotros');

Route::get('/', 'PageController@inicio');

Route::get('fotos', 'PageController@fotos')->name('foto');

Route::get('blog', 'PageController@noticias')->name('noticias');

Route::get('nosotros/{nombre?}', 'PageController@nosotros')->name('nosotros');

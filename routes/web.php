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
    return view('home');
});

//----------NOTICIAS----------
Route::get('/noticias', function () {
    return view('noticias/index');
});
Route::get('/noticia', function () {
    return view('noticias/show');
});
//----------------------------

//----------SECCIONES----------
Route::get('/alimeto', function () {
    return view('secciones/alimento');
});
Route::get('/seguros', function () {
    return view('secciones/seguros');
});
Route::get('/ferreteria', function () {
    return view('secciones/ferreteria');
});
Route::get('/agronomia', function () {
    return view('secciones/agronomia');
});
Route::get('/miel', function () {
    return view('secciones/miel');
});
Route::get('/veterinaria', function () {
    return view('secciones/veterinaria');
});
Route::get('/hacienda', function () {
    return view('secciones/hacienda');
});
Route::get('/cereales', function () {
    return view('secciones/cereales');
});
Route::get('/autoservicio', function () {
    return view('secciones/autoservicio');
});
Route::get('/ypf', function () {
    return view('secciones/ypf');
});
//-----------------------------

Route::get('/historia', function () {
    return view('historia');
});
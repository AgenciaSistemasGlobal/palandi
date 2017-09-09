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
    return view('web.home');
});

Route::get('/sobre', function () {
    return view('web.sobre');
});

Route::get('/servicos', function () {
    return view('web.servicos');
});

Route::get('/parcerias', function () {
    return view('web.parcerias');
});

Route::get('/trabalhe-conosco', function () {
    return view('web.trabalhe-conosco');
});

Route::get('/planos-mensais', function () {
    return view('web.planos-mensais');
});

Route::get('/contato', function () {
    return view('web.contato');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

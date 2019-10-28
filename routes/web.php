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
    return view('index');
});

Route::get('/le-mouvement', function() {
	return view('about_us');
});

Route::get('/nous-contacter', function() {
	return view('contact_us');
});

Route::get('/notre-organisation', function() {
	return view('our_team');
});


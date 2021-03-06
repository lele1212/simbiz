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

Route::prefix('dev')->group(function () {
	Route::get('/', function () {
    	return view('admin.login');
	});

	Route::get('/dashboard',function(){
		return view('admin.dashboard');
	});

	Route::get('/pelanggan',function(){
		return view('admin.listpelanggan');
	});

	Route::get('/pelangganbaru',function(){
		return view('admin.pelangganbaru');
	});
});
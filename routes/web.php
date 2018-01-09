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
    return view('main');
});

Route::group(["prefix" => 'admin'], function () {

Route::get('create', function () {
    return view('admin.create')->name('admin.create');
});

Route::get('update/{id}', function ($id) {
    return view('admin.update')->name('admin.update')->where('id' => '[0-9]');
});

    
});
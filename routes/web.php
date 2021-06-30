<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact/info', function () {
    return view('infos.contact.info');
})->name('info');

Route::get('/contact/partenariat', function () {
    return view('infos.contact.partenariat');
})->name('partenariat');

Route::get('/contact/sav', function () {
    return view('infos.contact.sav');
})->name('sav');

Route::get('/team/front', function () {
    return view('team.web.dev.frontend');
})->name('font');

Route::get('/team/back', function () {
    return view('team.web.dev.backend');
})->name('back');


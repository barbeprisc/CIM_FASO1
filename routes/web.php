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

Route::get('/', function () {
    return view('welcome');
});
Route::get('single-post.html', function () {
    return view('client');
});
Route::get('category.html', function () {
    return view('catégorie');
});
Route::get('about.html', function () {
    return view('apropos');
});
Route::get('contact.html', function () {
    return view('contacts');
});





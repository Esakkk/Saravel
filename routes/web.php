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
    return view('index', [
        "page" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('index', [
        "page" => "Home"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "page" => "Login"
    ]);
});

Route::get('/menu', function () {
    return view('menu', [
        "page" => "Menu"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "page" => "Blog"
    ]);
});

Route::get('/shop', function () {
    return view('shop', [
        "page" => "Shop"
    ]);
});

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

//...............................visitors

Route::get('/', 'pagescontroller@index');

//...............................visitors



//...............................users

Route::get('/dashboard', 'pagescontroller@dash');

Route::get('/profile', 'pagescontroller@profile');

Route::get('/gallery', 'pagescontroller@gallery');

//...............................users
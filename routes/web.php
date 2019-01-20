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

//guest routes

Route::get('/', 'guestcontroller@index')->name('index');

Route::get('/about', 'guestcontroller@about')->name('about');

Route::get('/terms', 'guestcontroller@terms')->name('terms');

Route::get('/fertility', 'guestcontroller@fertility')->name('fertility');

Route::get('/solution', 'guestcontroller@solution')->name('solution');

Route::get('/hypertension', 'guestcontroller@hyper')->name('hyper');

Route::get('/diabetes', 'guestcontroller@dia')->name('dia');

Route::get('/vision', 'guestcontroller@vision')->name('vision');

Route::get('/joint-care', 'guestcontroller@jc')->name('jc');

Route::get('/weight-loss-management', 'guestcontroller@loss')->name('loss');
//guest routes



//user routes


Route::get('/dashboard', 'usercontroller@index')->name('dash');

Route::get('/post', 'usercontroller@post')->name('post');

Route::get('/manage-post', 'usercontroller@mpost')->name('mpost');

Route::get('/ad', 'usercontroller@ad')->name('ad');

Route::get('/manage-ad', 'usercontroller@mad')->name('mad');

Route::get('/banner', 'usercontroller@banner')->name('banner');

//form routes

//create post
Route::POST('/new-post', 'usercontroller@new_post')->name('new_post');
//delete post
Route::DELETE('/delete-post', 'userController@delete1')->name('remove1');


//create ad
Route::POST('/new-ad', 'usercontroller@new_ad')->name('new_ad');
//delete ad
Route::DELETE('/delete-ad', 'usercontroller@delete2')->name('remove2');
//form routes


//create banner
Route::POST('/new-banner', 'usercontroller@new_banner')->name('new_banner');

//user routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

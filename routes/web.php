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

Route::get('/', 'homeController@index');
Route::post('/contact-form', 'homeController@contact');
Route::get('/blog', 'blogController@index');
Route::get('/category/{id}', 'categoryController@index');
Route::get('/post/{slug}', 'blogController@post');

// start admin
Route::get('/admin', 'admin\dashboardController@index')->middleware('auth');
Route::get('/login', 'admin\authController@index')->name('login');
Route::post('/login', 'admin\authController@login');
Route::get('/logout', 'admin\authController@logout')->name('logout');

Route::get('/user-settings', 'admin\userController@index')->middleware('auth');
Route::post('/user-settings', 'admin\userController@update')->middleware('auth');

Route::get('/post-category', 'admin\categoryController@index')->middleware('auth');
Route::get('/add-post-category', 'admin\categoryController@create')->middleware('auth');
Route::post('/add-post-category', 'admin\categoryController@store')->middleware('auth');
Route::get('/edit-post-category/{id}', 'admin\categoryController@edit')->middleware('auth');
Route::post('/edit-post-category/{id}', 'admin\categoryController@update')->middleware('auth');
Route::get('/delete-post-category/{id}', 'admin\categoryController@destroy')->middleware('auth');

Route::get('/all-posts', 'admin\postController@index')->middleware('auth');
Route::get('/add-post', 'admin\postController@create')->middleware('auth');
Route::post('/add-post', 'admin\postController@store')->middleware('auth');
Route::get('/edit-post/{id}', 'admin\postController@edit')->middleware('auth');
Route::post('/edit-post/{id}', 'admin\postController@update')->middleware('auth');
Route::get('/delete-post/{id}', 'admin\postController@destroy')->middleware('auth');

Route::get('/services-lists', 'admin\serviceController@index')->middleware('auth');
Route::get('/add-service', 'admin\serviceController@create')->middleware('auth');
Route::post('/add-service', 'admin\serviceController@store')->middleware('auth');
Route::get('/edit-service/{id}', 'admin\serviceController@edit')->middleware('auth');
Route::post('/edit-service/{id}', 'admin\serviceController@update')->middleware('auth');
Route::get('/delete-service/{id}', 'admin\serviceController@destroy')->middleware('auth');

Route::get('/portfolio-category', 'admin\portfolioCategoryController@index')->middleware('auth');
Route::get('/add-portfolio-category', 'admin\portfolioCategoryController@create')->middleware('auth');
Route::post('/add-portfolio-category', 'admin\portfolioCategoryController@store')->middleware('auth');
Route::get('/edit-portfolio-category/{id}', 'admin\portfolioCategoryController@edit')->middleware('auth');
Route::post('/edit-portfolio-category/{id}', 'admin\portfolioCategoryController@update')->middleware('auth');
Route::get('/delete-portfolio-category/{id}', 'admin\portfolioCategoryController@destroy')->middleware('auth');

Route::get('/all-portfolio', 'admin\portfolioController@index')->middleware('auth');
Route::get('/add-portfolio', 'admin\portfolioController@create')->middleware('auth');
Route::post('/add-portfolio', 'admin\portfolioController@store')->middleware('auth');
Route::get('/delete-portfolio/{id}', 'admin\portfolioController@destroy')->middleware('auth');

Route::get('/all-reviews', 'admin\reviewController@index')->middleware('auth');
Route::get('/add-review', 'admin\reviewController@create')->middleware('auth');
Route::post('/add-review', 'admin\reviewController@store')->middleware('auth');
Route::get('/edit-review/{id}', 'admin\reviewController@edit')->middleware('auth');
Route::post('/edit-review/{id}', 'admin\reviewController@update')->middleware('auth');
Route::get('/delete-review/{id}', 'admin\reviewController@destroy')->middleware('auth');

Route::get('/all-counters', 'admin\counterController@index')->middleware('auth');
Route::get('/add-counter', 'admin\counterController@create')->middleware('auth');
Route::post('/add-counter', 'admin\counterController@store')->middleware('auth');
Route::get('/edit-counter/{id}', 'admin\counterController@edit')->middleware('auth');
Route::post('/edit-counter/{id}', 'admin\counterController@update')->middleware('auth');
Route::get('/delete-counter/{id}', 'admin\counterController@destroy')->middleware('auth');

Route::get('/all-contacts', 'admin\contactController@index')->middleware('auth');
Route::post('/all-contacts', 'admin\contactController@update')->middleware('auth');

Route::get('/about-me', 'admin\aboutController@index')->middleware('auth');
Route::post('/about-me', 'admin\aboutController@update')->middleware('auth');

Route::get('/skills', 'admin\skillController@index')->middleware('auth');
Route::get('/add-skill', 'admin\skillController@create')->middleware('auth');
Route::post('/add-skill', 'admin\skillController@store')->middleware('auth');
Route::get('/edit-skill/{id}', 'admin\skillController@edit')->middleware('auth');
Route::post('/edit-skill/{id}', 'admin\skillController@update')->middleware('auth');
Route::get('/delete-skill/{id}', 'admin\skillController@destroy')->middleware('auth');

Route::get('/header-settings', 'admin\headerController@index')->middleware('auth');
Route::post('/header-settings', 'admin\headerController@update')->middleware('auth');

Route::get('/professions', 'admin\professionController@index')->middleware('auth');
Route::post('/professions', 'admin\professionController@store')->middleware('auth');
Route::get('/edit-profession/{id}', 'admin\professionController@edit')->middleware('auth');
Route::post('/edit-profession/{id}', 'admin\professionController@update')->middleware('auth');
Route::get('/delete-profession/{id}', 'admin\professionController@destroy')->middleware('auth');

Route::get('/socials', 'admin\socialController@index')->middleware('auth');
Route::post('/socials', 'admin\socialController@store')->middleware('auth');
Route::get('/edit-social/{id}', 'admin\socialController@edit')->middleware('auth');
Route::post('/edit-social/{id}', 'admin\socialController@update')->middleware('auth');
Route::get('/delete-social/{id}', 'admin\socialController@destroy')->middleware('auth');

Route::get('/inbox', 'admin\inboxController@index')->middleware('auth');
Route::get('/view-message/{id}', 'admin\inboxController@show')->middleware('auth');
Route::get('/delete-message/{id}', 'admin\inboxController@destroy')->middleware('auth');

Route::get('/meta', 'admin\metaController@index')->middleware('auth');
Route::post('/meta', 'admin\metaController@update')->middleware('auth');

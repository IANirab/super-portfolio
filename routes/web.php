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

Route::get('/post-category', 'admin\categoryController@index');
Route::get('/add-post-category', 'admin\categoryController@create');
Route::post('/add-post-category', 'admin\categoryController@store');
Route::get('/edit-post-category/{id}', 'admin\categoryController@edit');
Route::post('/edit-post-category/{id}', 'admin\categoryController@update');
Route::get('/delete-post-category/{id}', 'admin\categoryController@destroy');

Route::get('/all-posts', 'admin\postController@index');
Route::get('/add-post', 'admin\postController@create');
Route::post('/add-post', 'admin\postController@store');
Route::get('/edit-post/{id}', 'admin\postController@edit');
Route::post('/edit-post/{id}', 'admin\postController@update');
Route::get('/delete-post/{id}', 'admin\postController@destroy');

Route::get('/services-lists', 'admin\serviceController@index');
Route::get('/add-service', 'admin\serviceController@create');
Route::post('/add-service', 'admin\serviceController@store');
Route::get('/edit-service/{id}', 'admin\serviceController@edit');
Route::post('/edit-service/{id}', 'admin\serviceController@update');
Route::get('/delete-service/{id}', 'admin\serviceController@destroy');

Route::get('/portfolio-category', 'admin\portfolioCategoryController@index');
Route::get('/add-portfolio-category', 'admin\portfolioCategoryController@create');
Route::post('/add-portfolio-category', 'admin\portfolioCategoryController@store');
Route::get('/edit-portfolio-category/{id}', 'admin\portfolioCategoryController@edit');
Route::post('/edit-portfolio-category/{id}', 'admin\portfolioCategoryController@update');
Route::get('/delete-portfolio-category/{id}', 'admin\portfolioCategoryController@destroy');

Route::get('/all-portfolio', 'admin\portfolioController@index');
Route::get('/add-portfolio', 'admin\portfolioController@create');
Route::post('/add-portfolio', 'admin\portfolioController@store');
Route::get('/delete-portfolio/{id}', 'admin\portfolioController@destroy');

Route::get('/all-reviews', 'admin\reviewController@index');
Route::get('/add-review', 'admin\reviewController@create');
Route::post('/add-review', 'admin\reviewController@store');
Route::get('/edit-review/{id}', 'admin\reviewController@edit');
Route::post('/edit-review/{id}', 'admin\reviewController@update');
Route::get('/delete-review/{id}', 'admin\reviewController@destroy');

Route::get('/all-counters', 'admin\counterController@index');
Route::get('/add-counter', 'admin\counterController@create');
Route::post('/add-counter', 'admin\counterController@store');
Route::get('/edit-counter/{id}', 'admin\counterController@edit');
Route::post('/edit-counter/{id}', 'admin\counterController@update');
Route::get('/delete-counter/{id}', 'admin\counterController@destroy');

Route::get('/all-contacts', 'admin\contactController@index');
Route::post('/all-contacts', 'admin\contactController@update');

Route::get('/about-me', 'admin\aboutController@index');
Route::post('/about-me', 'admin\aboutController@update');

Route::get('/skills', 'admin\skillController@index');
Route::get('/add-skill', 'admin\skillController@create');
Route::post('/add-skill', 'admin\skillController@store');
Route::get('/edit-skill/{id}', 'admin\skillController@edit');
Route::post('/edit-skill/{id}', 'admin\skillController@update');
Route::get('/delete-skill/{id}', 'admin\skillController@destroy');

Route::get('/header-settings', 'admin\headerController@index');
Route::post('/header-settings', 'admin\headerController@update');

Route::get('/professions', 'admin\professionController@index');
Route::post('/professions', 'admin\professionController@store');
Route::get('/edit-profession/{id}', 'admin\professionController@edit');
Route::post('/edit-profession/{id}', 'admin\professionController@update');
Route::get('/delete-profession/{id}', 'admin\professionController@destroy');

Route::get('/socials', 'admin\socialController@index');
Route::post('/socials', 'admin\socialController@store');
Route::get('/edit-social/{id}', 'admin\socialController@edit');
Route::post('/edit-social/{id}', 'admin\socialController@update');
Route::get('/delete-social/{id}', 'admin\socialController@destroy');

Route::get('/inbox', 'admin\inboxController@index');
Route::get('/view-message/{id}', 'admin\inboxController@show');
Route::get('/delete-message/{id}', 'admin\inboxController@destroy');

Route::get('/meta', 'admin\metaController@index');
Route::post('/meta', 'admin\metaController@update');

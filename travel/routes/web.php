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
Route::get('/', 'LandingController@getPageLanding');

Route::get('/searching', 'SearchController@getPagesSome');
Route::post('/searching', 'SearchController@postQuestion');

Route::get('/landing/{db_news}/{db_hot}/{db_popular}', 'LandingController@getPageLanding');
Route::get('/landing', 'LandingController@getPageLanding');

Route::get('/tour/{tour_id}', 'TourController@getPageTour');
Route::post('/tour', 'TourController@postTour');

Route::get('/about', 'AboutController@getPageAbout');


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

Route::get('/', 'HomeController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Questions
Route::resource('questions', 'QuestionController')->middleware('can:view-question');


// Contest
Route::get('contest', 'ContestController@questions')->name('contest');
Route::post('contest/check', 'ContestController@check')->name('contest.check');
Route::get('/contest/results', 'ContestController@results')->name('contest.results');

// Users
Route::resource('users', 'UserController')->middleware('can:view-users');
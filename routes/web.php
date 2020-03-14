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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/', '/login');

Auth::routes(['register' => false ]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/employees', 'HomeController@employees')->name('employees');
Route::get('/applicants', 'HomeController@applicants')->name('applicants');
Route::get('/shortlisted', 'HomeController@shortlisted')->name('shortlisted');
Route::get('/reporting', 'HomeController@reporting')->name('reporting');
Route::get('/benefits', 'HomeController@benefits')->name('benefits');
Route::get('/profile', 'HomeController@profile')->name('profile');

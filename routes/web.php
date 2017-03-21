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

Route::get('/', function () {
    return view('welcome');


});

Route::get('/students', 'StudentsController@showstudentform' );
Route::post('/students', 'StudentsController@insertstudentform' );
Route::post('/add', 'StudentsController@addnewStd' );
Route::get('/editstudentform/{id}', 'StudentsController@showstudentform2edit' );
Route::post('/editstudentform/{id}', 'StudentsController@updatestudentform');
Route::get('/deletestudentform/{id}', 'StudentsController@deletestudentform');


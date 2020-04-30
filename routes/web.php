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

Route::get('/dashboard', 'Admin@dashboard');

//get pertanyaan, add jawaban
Route::get('/dashboard/pertanyaan', 'Pertanyaan@pertanyaan');
Route::get('/dashboard/jawab', 'Pertanyaan@jawab');

//form bertanya dan submit
Route::get('/ask', 'Pertanyaan@tanya');
Route::post('/submit-pertanyaan', 'Pertanyaan@doTanya');

//form jawab dan submit
Route::get('/answer', 'Pertanyaan@jawab');
Route::post('/submit-jawaban', 'Pertanyaan@doJawab');

//delete questioner
Route::get('/remove-question/{id}', 'Pertanyaan@hapus');

//debugger
Route::get('/test', 'Pertanyaan@test');


//Authenticate
Route::get('/login', 'Authentication@login');
Route::post('/validate-login', 'Authentication@validateLogin');
Route::get('/logout', 'Authentication@logout');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

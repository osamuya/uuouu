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
//    return view('index');
//});
Route::get('/', 'TopController@index');
Route::match(['get', 'post'],'regist/{hash}', 'TopController@regist');


// delevop list page
Route::get('/list', function () {
    return view('list');
});

Route::get('/sample', 'SampleController@index');
Route::get('/sendmail', 'SendmailtestController@index');

// Sendmail
//Route::get('/mail', 'MailController@index');
//Route::post('/send', 'MailactController@send');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get', 'post'],'stored/', 'Auth\RegisterController@stored');

//oroginal sigin in (register) & login
Route::get('/signin', 'UAuth\SigninController@index');

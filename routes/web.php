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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list', 'Contact@showList')->name('contactList');

Route::get('/contact/{id}', 'Contact@single')->name('singleContact');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/edit/{id}', 'Contact@edit')->name('contactEdit');
    Route::post('/edit', 'Contact@editPost')->name('contactEditPost');
    Route::get('/new', 'Contact@add')->name('contactNew')->middleware('auth');
    Route::post('/new', 'Contact@addPost')->name('contactNewPost');

    Route::get("/exists/{mail}", function ($mail) {
        return \App\Contact::where("mail", "=", $mail)->count();
    });
    Route::get("/exists/{mail}/{id}", function ($mail, $id) {
        return \App\Contact::where("mail", "=", $mail)->where("id", "!=", $id)->count();
    });
});

Route::get("/", 'Contact@showList');
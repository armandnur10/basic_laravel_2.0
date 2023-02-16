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

// Route::resource('/contoh', 'ContohController');

// Route::match(['get', 'post'], '/', function(){
//     return redirect('/contoh');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/task', 'TaskController@index');
Route::get('task/create', 'TaskController@create');
Route::post('/savetask', 'TaskController@store');
Route::get('/task/{id}', 'TaskController@detail');


Route::view('/tampilan', 'template.template');


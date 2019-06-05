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
// Authentication Routes...
/*
login
logout
register
reset
verify
*/


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home2', 'HomeController@home2')->name('home2');

/*
 * SuperAdmin middleware
 * */
Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function () {
    Route::match(['get', 'post'], '/instrument/add', 'InstrumentController@create')->name("Instrument.add");
});

/*
 * Admin middleware
 * */
/*Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
    Route::match(['get', 'post'], '/adminOnlyPage/', "HomeController@admin");
});*/


/*
 * member only middleware
 * */
/*Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function () {
    Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');
});*/


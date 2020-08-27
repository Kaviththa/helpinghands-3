<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin', 'AdminController@index');
Auth::routes(['verify' => true]);

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

Route::get('/helper', 'HelperController@index')->name('helper.index')->middleware('helper');
Route::get('/helper/create', 'HelperController@create')->name('helper.create')->middleware('helper');
Route::post('/helper/create', 'HelperController@store')->name('helper.store');
Route::get('/helper/{helper}/edit', 'HelperController@edit')->name('helper.edit');
Route::patch('/helper/{helper}/update', 'HelperController@update')->name('helper.update');

Route::get('/team', 'TeamController@index')->name('team.index')->middleware('team');
Route::get('/team/create', 'TeamController@create')->name('team.create')->middleware('team');
Route::post('/team/create', 'TeamController@store')->name('team.store');
Route::get('/team/{team}/edit', 'TeamController@edit')->name('team.edit');
Route::patch('/team/{team}/update', 'TeamController@update')->name('team.update');


Route::get('/receiver', 'ReceiverController@index')->name('receiver.index')->middleware('receiver');
Route::get('/receiver/create', 'ReceiverController@create')->name('receiver.create')->middleware('receiver');
Route::post('/receiver/create', 'ReceiverController@store')->name('receiver.store');
Route::get('pdfview/{id}','ReceiverController@view_proof')->name('proof.view');




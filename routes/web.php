<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/tense', 'HomeController@tense')->name('tense');
Route::get('/grammar', 'HomeController@grammar')->name('grammar');

Route::get("/verbs", "VerbController@all")->name("verbs");
Route::get("/irregular/{verb}", "VerbController@irregular")->name("irregular");
Route::get("/phrasal/{verb}", "VerbController@phrasal")->name("phrasal");
Route::post("/verbs", "VerbController@lifeSearch")->name("lifeSearch");

Route::group(['middleware' => "auth"], function () {
    Route::get("/profile", "ProfileController@index")->name("profile");
});

Auth::routes(['verify' => true]);

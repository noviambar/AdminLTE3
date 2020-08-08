<?php

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

Auth::routes();
Route::get('/', function(){
    if (auth()->check()){
        return redirect()->route('home');
    }else{
        return redirect('login');
    }
});

Route::get('/logproblem','LogController@logproblem')->name('logproblem');
Route::get('/meeting','MeetingController@meeting')->name('meeting');
Route::get('/training','TrainingController@training')->name('training');
Route::get('/register','RegisterController@register')->name('register');
Route::post('/postRegister','RegisterController@postRegister')->name('postRegister');


Route::get('/dashboard','AdminController@dashboard')->name('dashboard');






Route::get('/home', 'HomeController@index')->name('home');


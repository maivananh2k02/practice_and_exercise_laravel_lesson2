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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function (){
   echo '<h1>welcome to home page</h1>';
});

Route::get('/about',function (){
    echo '<h1>welcome to about page</h1>';
});

Route::get('/contact',function (){
    echo '<h1>welcome to contact page</h1>';
});

Route::get('/user',function (){
   $name='Masud Alam';
   return view('user',compact(['name']));
});
Route::get('/user/{name?}',function ($name=null){
    return view('user',compact(['name']));
});

Route::get('/','App\Http\Controllers\HomeController@index');


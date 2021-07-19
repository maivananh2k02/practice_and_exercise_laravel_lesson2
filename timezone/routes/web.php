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

Route::get('/',function (){
   return view('index');
});

Route::get('/{timeZone?}',function ($timeZone=null){
    if($timeZone) {
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));
        $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timeZone)));
        echo 'Múi giờ bạn chọn ' . $timeZone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
    }
    return view('home');
});

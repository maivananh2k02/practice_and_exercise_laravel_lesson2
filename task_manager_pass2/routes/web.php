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

Route::prefix('customer')->group(function (){


    Route::get('index',[\App\Http\Controllers\TaskController::class,'index'])->name('customer.index');

    Route::get('create',[\App\Http\Controllers\TaskController::class,'create'])->name('customer.create');

    Route::get('store',[\App\Http\Controllers\TaskController::class,'store'])->name('customer.store');

    Route::get('{id}/show',[\App\Http\Controllers\TaskController::class,'show','id'])->name('customer.show');

    Route::get('{id}/edit',[\App\Http\Controllers\TaskController::class,'edit','id'])->name('customer.edit');

    Route::patch('{id}/update', function () {

    });

    Route::delete('{id}/',[\App\Http\Controllers\TaskController::class,'delete'])->name('customer.delete');


});


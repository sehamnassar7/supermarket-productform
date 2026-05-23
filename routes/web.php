<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/softdelete/{id}','App\Http\Controllers\ProductController@softDelete')->name('soft.delete');

Route::get('product/trash','App\Http\Controllers\ProductController@trashedProducts')->name('trash.delete');

Route::get('product/back/from/softdelete/{id}','App\Http\Controllers\ProductController@backFromsoftDelete')->name('back.softdelete');

Route::get('product/Delete/forever/{id}','App\Http\Controllers\ProductController@deleteForEver')->name('hard.delete');

Route::resource ('product','App\Http\Controllers\ProductController');



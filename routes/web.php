<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'User\HomeController@index');

Route::get('post','User\PostController@index')->name('post');


Route::resource('admin/post','Admin\PostController');

Route::resource('admin/tag','Admin\TagController');

Route::resource('admin/category','Admin\CategoryController');

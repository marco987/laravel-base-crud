<?php

Route::get('/indexPost', 'ControllerPost@index')->name('index.post');
Route::get('/createPost', 'ControllerPost@create')->name('create.post');
Route::post('/storePost', 'ControllerPost@store')->name('store.post');

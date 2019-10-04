<?php

Route::get('/indexPost', 'ControllerPost@index')->name('index.post');
Route::get('/createPost', 'ControllerPost@create')->name('create.post');
Route::post('/storePost', 'ControllerPost@store')->name('store.post');
Route::get('/{id}/editPost', 'ControllerPost@edit')->name('edit.post');
Route::post('/{id}/updatePost', 'ControllerPost@update')->name('update.post');

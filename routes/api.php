<?php

use Illuminate\Support\Facades\Route;

//add new items
Route::post('/addItem', [
    'uses'=> 'ItemController@addItem'
]);

//get all items
Route::get('/getItem', [
    'uses'=> 'ItemController@getItem'
]);

//get an item by id
Route::get('/getAnItem/{id}', [
   'uses'=> 'ItemController@getAnItem'
]);

//delete an item
Route::delete('/deleteItem/{id}', [
    'uses'=> 'ItemController@deleteItem'
]);

//edit an item
Route::post('/editItem/{id}', [
   'uses'=> 'ItemController@editItem'
]);

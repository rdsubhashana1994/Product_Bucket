<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//add new items
Route::post('/add-item', [
    'uses'=> 'ItemController@addItem'
]);

//get all items
Route::get('/getItem', [
    'uses'=> 'ItemController@getItem'
]);

//delete an item
Route::delete('/deleteItem/{id}', [
    'uses'=> 'ItemController@deleteItem'
]);

//edit an item
Route::put('/editItem/{id}', [
   'uses'=> 'ItemController@editItem'
]);

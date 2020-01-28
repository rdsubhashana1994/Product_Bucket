<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//add new items
Route::post('/add-item', [
    'uses'=> 'ItemController@addItem'
]);

//get all items
Route::get('/get-item', [
    'uses'=> 'ItemController@getItem'
]);

//delete an item
Route::delete('/delete-item/{id}', [
    'uses'=> 'ItemController@deleteItem'
]);

//edit an item
Route::put('/edit-item/{id}', [
   'uses'=> 'ItemController@editItem'
]);

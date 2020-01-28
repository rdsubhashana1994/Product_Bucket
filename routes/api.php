<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//add new items
Route::post('/additem', [
    'uses'=> 'ItemController@addItem'
]);

//get all items
Route::get('/getitem', [
    'uses'=> 'ItemController@getItem'
]);

//delete an item
Route::delete('/deleteitem/{id}', [
    'uses'=> 'ItemController@deleteItem'
]);

//edit an item
Route::put('/edititem/{id}', [
   'uses'=> 'ItemController@editItem'
]);

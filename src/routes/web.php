<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::group(['namespace' => 'Bitfumes\contact\Http\Controllers'],function(){

    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send');
    
});

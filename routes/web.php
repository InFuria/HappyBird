<?php

Route::get('/', function (){
    return view('welcome');
});

/**
 * Start
*/

Route::prefix('start')->group(function (){
    Route::get('/', ['as' => 'start.index', 'uses' => 'BasicController@index']);
    Route::get('/about', ['as' => 'start.about', 'uses' => 'BasicController@about']);
    Route::get('/services', ['as' => 'start.services', 'uses' => 'BasicController@services']);
    Route::get('/contact', ['as' => 'start.contact', 'uses' => 'BasicController@contact']);
    Route::get('/tags', ['as' => 'start.tags', 'uses' => 'BasicController@tags']);
});;


/**
* Blog
 */

Route::prefix('blog')->group(function (){
    Route::get('/', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
});

/**
 * Simple Navbar
 */
Route::prefix('navbar')->group(function (){
    Route::get('/', ['as' => 'nav.index', 'uses' => 'NavController@index']);
    Route::get('/scroll', ['as' => 'nav.scroll', 'uses' => 'NavController@scroll']);
    Route::get('/cards', ['as' => 'nav.cards', 'uses' => 'NavController@cards']);
    Route::get('/testimonials', ['as' => 'nav.testimonials', 'uses' => 'NavController@testimonials']);
    Route::get('/sticky', ['as' => 'nav.sticky', 'uses' => 'NavController@sticky']);
});


Route::get('/material', function (){
    return view('material');
});


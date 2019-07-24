<?php

/**
 * Happy Start
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function (){
    return view('start.index');
});

Route::get('/contact', function (){
    return view('start.contact');
});

Route::get('/services', function (){
    return view('start.services');
});

Route::get('/about', function (){
    return view('start.about');
});

Route::get('/tags', function (){
    return view('start.tags');
});



/**
BLOG CURSO
 */

Route::prefix('blog')->group(function (){
    Route::get('/', ['uses' => 'BlogController@index']);
    /*Route::get('', '');
    Route::get('', '');*/
});

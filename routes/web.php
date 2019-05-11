<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tasks = [
        'go to the store',
        'go to the market',
        'go to work'
    ];

//    return view('welcome', [
//        'tasks' => $tasks,
//        'laracast' => 'Laracasts',
//        'name' => request('name')
//    ]);

    // OR

    return view('welcome')->withTasks($tasks)->withLaracast('Laracasts')->withName(request('name'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
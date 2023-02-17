<?php

use Illuminate\Support\Facades\Route;

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
    $comics = config('db');

    return view('home', compact('comics'));
});

Route::get('/detail/{title}', function($titolo){
    $comics = config('db');
    dd($titolo);
    $single = '';
    foreach($comics as $comic){
        if($comic['title'] == $titolo){
            $single = $titolo;
        }
    }

    return view('detail_comic', compact('single'));
})->name('detail-comic');

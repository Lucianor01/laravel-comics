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

    $title = 'Comics DC';

    $comics = config('comics.comics');

    return view('pages.home', compact('title', 'comics'));
})->name('home');

Route::get('/details/{link}', function ($link) {

    $title = 'Comics DC | Details';

    $linkComics = config('comics.comics');

    $arrayComics = array_filter($linkComics, fn ($linkComics) => $linkComics['link'] === $link);

    $singleComics = $arrayComics[array_key_first($arrayComics)];

    return view('pages.details', compact('title', 'singleComics'));
})->name('details');

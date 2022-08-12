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
    return view('welcome');
})->name('_home');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('support', function () {
    return view('pages.support');
})->name('support');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('podcast', function () {
    return view('pages.podcast');
})->name('podcast');

Route::get('event', function () {
    return view('pages.event');
})->name('event');

Route::get('news', function () {
    return view('pages.news');
})->name('news');

Route::get('news_more', function () {
    return view('pages.news_more');
})->name('news_more');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
});

Route::get('home', function(){
    return view('admin.home');
})->name('home');

Route::get('activite', function(){
    return view('admin.activites.listActivite');
})->name('activite');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('contact', function(){
    return view('contact');
});
Route::get('header', function(){
    return view('partials.header');
})->name('header');
Route::get('template', function(){
    return view('partials.template');
})->name('template');

require __DIR__.'/auth.php';

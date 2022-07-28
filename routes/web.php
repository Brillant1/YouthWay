<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\DomaineController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ActiviteController;
use App\Http\Controllers\Admin\ActualiteController;
use App\Http\Controllers\Admin\FlashInfoController;


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



Route::resource('activites', ActiviteController::class);
Route::resource('actualites', ActualiteController::class);
Route::resource('flashInfos', FlashInfoController::class);
Route::resource('domaines', DomaineController::class);
Route::resource('medias', MediaController::class);
Route::resource('partenaires', PartnerController::class);


Route::get('home', function(){
    return view('admin.home');
})->name('home');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('contact', function(){
    return view('contact');
})->name('contact');

Route::get('historique', function(){
    return view('historique');
})->name('historique');

Route::get('actualite', function(){
    return view('actualite');
})->name('actualite');




Route::get('/', function(){
    return view('accueil');
})->name('accueil');

Route::get('activites', function(){
    return view('activite');
})->name('activites');

Route::get('activite/domaine', function(){
    return view('activiteDomaine');
})->name('activite-domaine');

require __DIR__.'/auth.php';

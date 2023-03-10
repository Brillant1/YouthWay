<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Admin\DomaineController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ActiviteController;
use App\Http\Controllers\Admin\ActualiteController;
use App\Http\Controllers\Admin\FlashInfoController;
use App\Http\Controllers\Admin\TemoignageController;


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



Route::get('/admin/dashboard', function () {
    return view('admin.home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('seeder', function(){
    Artisan::call('db:seed');
});

Route::get('optimize',[ GuestController::class, 'optimize']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('activites', ActiviteController::class);
    Route::resource('actualites', ActualiteController::class);
    Route::resource('flashInfos', FlashInfoController::class);
    Route::resource('domaines', DomaineController::class);
    Route::resource('medias', MediaController::class);
    Route::resource('partenaires', PartnerController::class);
    Route::resource('temoignages', TemoignageController::class);

    // Route::get('home', function(){
    //     return view('admin.home');
    // })->name('home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [GuestController::class, 'showHomePage'])->name('accueil');






Route::get('actualite', [GuestController::class, 'displayAllActualites'])->name('actualite');
Route::get('domaine', [GuestController::class, 'getAllDomaines'])->name('domaine');
Route::get('activite', [GuestController::class, 'getAllActivites'])->name('activite');

Route::get('actualite/detail/{id}', [GuestController::class, 'showActualiteDetail'])->name('actualite-detail');
Route::get('activite/detail/{id}', [GuestController::class,'showActiviteDetail'])->name('activite-detail');


Route::get('contact', [ContactMailController::class, 'create'])->name('contact');
Route::post('contact', [ContactMailController::class, 'store'])->name('contact-stroe');

Route::get('don', [GuestController::class, 'don'])->name('create-don');
Route::post('don', [GuestController::class, 'don'])->name('save-don');



Route::get('historique', function(){
    return view('historique');
})->name('historique');

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('mediatheque', function(){
    return view('mediatheque');
})->name('mediatheque');


require __DIR__.'/auth.php';

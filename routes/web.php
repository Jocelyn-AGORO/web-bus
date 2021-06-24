<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/services",[PagesController::class,'services']);
Route::get("/lignes",[PagesController::class,'lines']);
Route::get("/apropos",[PagesController::class,'about']);
Route::get("/contacts",[PagesController::class,'contacts']);

Route::post('/inscription',[ClientController::class,'store'])->name('inscription');
Route::get('/services/reservations',[VoyageController::class,'find'])->name('reservations');
Route::post('/services/reservations',[VoyageController::class,'store'])->name('rechercher/reservation');
Route::get('/services/expeditions',[VoyageController::class,'find'])->name('reservations');
Route::post('/services/expeditions',[VoyageController::class,'store'])->name('rechercher/expeditions');

Route::get('/services',function(){
    return view('services');
})->name('services');

Route::get('/lignes',function(){
    return view('lines');
})->name('lines');

Route::get('/contacts',function(){
    return view('contacts');
})->name('contacts');

Route::get('/about',function(){
    return view('about');
})->name('about');





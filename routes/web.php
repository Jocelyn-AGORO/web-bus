<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\ExpediteurController;
use App\Http\Controllers\PassagerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\ColisController;


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


//Pages
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/services",[PagesController::class,'services']);
Route::get("/lignes",[PagesController::class,'lines']);
Route::get("/apropos",[PagesController::class,'about']);
Route::get("/contacts",[PagesController::class,'contacts']);

//Gestion des Colis
Route::post('admin/colis',[ColisController::class,'store'])->name('ajoutercolis');
Route::get('admin/colis',[ColisController::class,'ajouter'])->name('colis');

//Gestion des tickets
Route::post('admin/tickets',[TicketsController::class,'store'])->name('ajouterticket');
Route::get('admin/tickets',[TicketsController::class,'ajouter'])->name('tickets');

//Gestion des reservations
Route::post('admin/reservations',[ReservationController::class,'store'])->name('ajouterreservation');
Route::get('admin/reservations',[ReservationController::class,'ajouter'])->name('reservations');

//Gestion des passagers
Route::post('admin/passagers',[PassagerController::class,'store'])->name('ajouterpassager');
Route::get('admin/passagers',[PassagerController::class,'ajouter'])->name('passagers');

//Gestion des expediteurs
Route::post('admin/expediteurs',[ExpediteurController::class,'store'])->name('ajouterexpediteur');
Route::get('admin/expediteurs',[ExpediteurController::class,'ajouter'])->name('expediteurs');

//Gestion des conducteurs
Route::post('admin/conducteurs',[ConducteurController::class,'store'])->name('ajouterconducteur');
Route::get('admin/conducteurs',[ConducteurController::class,'ajouter'])->name('conducteurs');

//Gestion des bus
Route::post('admin/bus',[BusController::class,'store'])->name('ajouterbus');
Route::get('admin/bus',[BusController::class,'ajouter'])->name('bus');

//Gestion des Agences
Route::post('admin/agences',[AgenceController::class,'store'])->name('ajouteragence');
Route::get('admin/agences',[AgenceController::class,'ajouter'])->name('agences');

//Gestion des Villes
Route::post('admin/villes',[VilleController::class,'store'])->name('ajouterville');
Route::get('admin/villes',[VilleController::class,'ajouter'])->name('villes');

//Gestion des Voyages
Route::post('admin/voyages',[VoyageController::class,'store'])->name('ajoutervoyage');
Route::get('admin/voyages',[VoyageController::class,'ajouter'])->name('voyages');

//Inscription
Route::get('/inscription',[ClientController::class,'inscription'])->name('inscription');
Route::post('/inscription',[ClientController::class,'store'])->name('inscrire');

//page pour consulter la liste de voyage
Route::get('/services/reservations',[VoyageController::class,'index'])->name('reservations');
//nombre de places disponibles
Route::get('/services/reservations/voyages',[VoyageController::class,'index'])->name('places-disponibles');
//reservez une place
Route::post('/services/reservations/reserver',[VoyageController::class,'reserver'])->name('reserver');
Route::get('/services/expeditions',[VoyageController::class,'expeditions'])->name('expeditions');
Route::post('/services/reservations/expedier',[VoyageController::class,'expedier'])->name('expedier');

Route::get('/services',[PagesController::class,'services'])->name('services');

Route::get('/lignes',[PagesController::class,'lines'])->name('lines');

Route::get('/contacts',[PagesController::class,'contacts'])->name('contacts');

Route::get('/about',[PagesController::class,'about'])->name('about');





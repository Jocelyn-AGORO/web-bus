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
use App\Http\Controllers\AdministrateurController;


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
})->name('acceuil');

// Auth::routes();

//Pages
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get("/services",[PagesController::class,'services']);
// Route::get("/lignes",[PagesController::class,'lines']);
// Route::get("/apropos",[PagesController::class,'about']);
// Route::get("/contacts",[PagesController::class,'contacts']);

//Pages du site Web

Route::get('admin.panel',[PagesController::class,'administrer'])->name('panel-admin');

Route::post('/admin/login',[AdministrateurController::class,'connexion_admin'])->name('connexion_admin');

Route::get('/admin/login',[AdministrateurController::class,'auth_admin'])->name('auth_admin');

Route::get('/services',[PagesController::class,'services'])->name('services');

Route::get('/lignes',[PagesController::class,'lines'])->name('lines');

Route::get('/contacts',[PagesController::class,'contacts'])->name('contacts');

Route::get('/about',[PagesController::class,'about'])->name('about');

Route::post('/connexion',[ClientController::class,'index'])->name('connexion');

Route::get('/connexion',[PagesController::class,'page_connexion'])->name('page_connexion');

//Gestion des Colis
Route::post('admin/colis',[ColisController::class,'store'])->name('ajoutercolis');
Route::put('admin/colis/editer/{id}',[ColisController::class,'editer'])->name('editercolis');
Route::delete('admin/colis/supprimer/{id}',[ColisController::class,'supprimer'])->name('supprimercolis');
Route::get('admin/colis',[ColisController::class,'ajouter'])->name('colis');

//Gestion des tickets
Route::post('admin/tickets',[TicketsController::class,'store'])->name('ajouterticket');
Route::put('admin/tickets/editer/{id}',[TicketsController::class,'editer'])->name('editerticket');
Route::delete('admin/tickets/supprimer/{id}',[TicketsController::class,'supprimer'])->name('supprimerticket');
Route::get('admin/tickets',[TicketsController::class,'ajouter'])->name('tickets');

//Génération des tickets
Route::get('/services/tickets',[TicketsController::class,'afficher_ticket'])->name('ticket');
Route::get('ticket.pdf',[TicketsController::class,'generateTicket'])->name('telecharger_ticket');


//Gestion des reservations
Route::post('admin/reservations',[ReservationController::class,'store'])->name('ajouterreservation');
Route::put('admin/reservations/editer/{id}',[ReservationController::class,'editer'])->name('editerreservation');
Route::delete('admin/reservations/supprimer/{id}',[ReservationController::class,'supprimer'])->name('supprimerreservation');
Route::get('admin/reservations',[ReservationController::class,'ajouter'])->name('reservations-liste');

//Gestion des passagers
Route::post('admin/passagers',[PassagerController::class,'store'])->name('ajouterpassager');
Route::put('admin/passagers/editer/{id}',[PassagerController::class,'editer'])->name('editerpassager');
Route::delete('admin/passagers/supprimer/{id}',[PassagerController::class,'supprimer'])->name('supprimerpassager');
Route::get('admin/passagers',[PassagerController::class,'ajouter'])->name('passagers');

//Gestion des expediteurs
Route::post('admin/expediteurs',[ExpediteurController::class,'store'])->name('ajouterexpediteur');
Route::put('admin/expediteurs/editer/{id}',[ExpediteurController::class,'editer'])->name('editerexpediteur');
Route::delete('admin/expediteurs/supprimer/{id}',[ExpediteurController::class,'supprimer'])->name('supprimerexpediteur');
Route::get('admin/expediteurs',[ExpediteurController::class,'ajouter'])->name('expediteurs');

//Gestion des conducteurs
Route::post('admin/conducteurs',[ConducteurController::class,'store'])->name('ajouterconducteur');
Route::put('admin/conducteurs/editer/{id}',[ConducteurController::class,'editer'])->name('editerconducteur');
Route::delete('admin/conducteurs/supprimer/{id}',[ConducteurController::class,'supprimer'])->name('supprimerconducteur');
Route::get('admin/conducteurs',[ConducteurController::class,'ajouter'])->name('conducteurs');

//Gestion des bus
Route::post('admin/bus',[BusController::class,'store'])->name('ajouterbus');
Route::put('admin/bus/editer/{id}',[BusController::class,'editer'])->name('editerbus');
Route::delete('admin/bus/supprimer/{id}',[BusController::class,'supprimer'])->name('supprimerbus');
Route::get('admin/bus',[BusController::class,'ajouter'])->name('bus');

//Gestion des Agences
Route::post('admin/agences',[AgenceController::class,'store'])->name('ajouteragence');
Route::put('admin/agences/editer/{id}',[AgenceController::class,'editer'])->name('editeragence');
Route::delete('admin/agences/supprimer/{id}',[AgenceController::class,'supprimer'])->name('supprimeragence');
Route::get('admin/agences',[AgenceController::class,'ajouter'])->name('agences');

//Gestion des Villes
Route::post('admin/villes',[VilleController::class,'store'])->name('ajouterville');
Route::put('admin/villes/editer/{id}',[VilleController::class,'editer'])->name('editerville');
Route::delete('admin/villes/supprimer/{id}',[VilleController::class,'supprimer'])->name('supprimerville');
Route::get('admin/villes',[VilleController::class,'ajouter'])->name('villes');

//Gestion des Voyages
Route::post('admin/voyages',[VoyageController::class,'store'])->name('ajoutervoyage');
Route::put('admin/voyages/editer/{id}',[VoyageController::class,'editer'])->name('editervoyage');
Route::delete('admin/voyages/supprimer/{id}',[VoyageController::class,'supprimer'])->name('supprimervoyage');
Route::get('admin/voyages',[VoyageController::class,'ajouter'])->name('voyages');

//Inscription
Route::get('/inscription',[ClientController::class,'inscription'])->name('inscription');
Route::post('/inscription',[ClientController::class,'store'])->name('inscrire');

//page pour consulter la liste de voyage
Route::get('/services/reservations',[VoyageController::class,'index'])->name('reservations');

//nombre de places disponibles
Route::get('/services/reservations/voyages',[VoyageController::class,'index'])->name('places-disponibles');

//reservez une place
Route::post('/services/reservations/reserver/{id}',[VoyageController::class,'reserver'])->name('reserver');
Route::get('/services/reservations/reserver/{id}',[VoyageController::class,'reserver'])->name('success');
//nombre de place
//Route::post('/services/reservations',[VoyageController::class,'nb_place'])->name('nb_place');

Route::get('/services/expeditions',[VoyageController::class,'expeditions'])->name('expeditions');

Route::post('/services/reservations/expedier',[VoyageController::class,'expedier'])->name('expedier');







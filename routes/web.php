<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretaireController;
use App\Http\Controllers\ChefdepController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\apprenantController;

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

 Route::get('/',function(){
     return view('accueil');
 });
//Routes Connexion
 Route::get('secretaire',[SecretaireController::class,'connexion'])->name('secconnect');
 Route::get('chefdepartement',[ChefdepController::class,'connexion'])->name('chefconnect');
 Route::get('professeur',[ProfesseurController::class,'connexion'])->name('profconnect');
 Route::get('apprenant',[apprenantController::class,'connexion'])->name('appconnect');

 //Routes Affichages
 
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ProgrammeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/

Route::get('/', function(){
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/programmes/programme', [ProgrammeController::class, 'index']);
    Route::get('/programmes/ajouter_programme', [ProgrammeController::class, 'ajoutProgramme']);
    Route::post('/programmes', [ProgrammeController::class, 'enregistrerProgramme'])->name('enregistrerProgramme');
    Route::get('/programmes/{candidat_id}', [ProgrammeController::class, 'afficherProgrammeCandidat'])->name('programmes');
    Route::get('/programmes/sondage/graphique', [ProgrammeController::class, 'programmeSondage'])->name('sondage');
    Route::get('/recup-donnees',[LikeController::class, 'recupDonnees'])->name('recupDonnees');
    Route::get('/modifier_programme-programmes/{id}',[ProgrammeController::class,'modifier_programme']);
    Route::post('/modifier_programme/traitement',[ProgrammeController::class,'modifier_programme_traitement']);
    Route::get('/supprimer_programme-programmes/{id}',[ProgrammeController::class,'supprimer_programme']);



  


    Route::post('/programmes/{programme_id}/like', [LikeController::class, 'like']);
    Route::post('/programmes/{programme_id}/dislike', [LikeController::class, 'dislike']);




    
    Route::get('/candidats/candidat',[CandidatController::class,'index']);
    Route::get('/modifier_candidat-candidats/{id}',[CandidatController::class,'modifier_candidat']);
    Route::post('/modifier_candidat/traitement',[CandidatController::class,'modifier_candidat_traitement']);
    Route::get('/candidats/ajout_candidat',[CandidatController::class,'ajout_candidat']);
    Route::post('/ajout_candidat/traitement',[CandidatController::class,'ajout_candidat_traitement']);
    Route::get('/supprimer_candidat-candidats/{id}',[CandidatController::class,'supprimer_candidat'])->name('supprimerCandidat');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
/* 


*/


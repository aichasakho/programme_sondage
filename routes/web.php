<?php

use Illuminate\Support\Facades\Route;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/programmes/programme', [ProgrammeController::class, 'index']);
    Route::get('/programmes/programme_sonko', [ProgrammeController::class, 'affiche']);

    Route::get('/candidats/candidat',[CandidatController::class,'index']);
    Route::get('/modifier_candidat-candidats/{id}',[CandidatController::class,'modifier_candidat']);
    Route::post('/modifier_candidat/traitement',[CandidatController::class,'modifier_candidat_traitement']);
    Route::get('/candidats/ajouter_candidat',[CandidatController::class,'ajout_candidat']);
    Route::post('/ajouter_candidat/traitement',[CandidatController::class,'ajout_candidat_traitement']);

    Route::get('/supprimer_candidat-candidats/{id}',[CandidatController::class,'supprimer_candidat'])->name('supprimerCandidat');

    Route::get('/programmes/ajouter_programme',[ProgrammeController::class,'ajout_programme']);
    Route::post('/programmes/ajouter_programe/',[ProgrammeController::class,'store']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
/* 


*/


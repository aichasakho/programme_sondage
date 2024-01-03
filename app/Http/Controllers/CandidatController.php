<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use App\Http\Controllers\CandidatController;

class CandidatController extends Controller

{
     public function index()
    {
        $affiche = Candidat::all();
        return view('candidats.candidat',compact('affiche'));
    }
    public function ajout_candidat()
    {
        return view('candidats.ajout_candidat');
    }
    public function ajout_candidat_traitement(Request $request)
    {
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'parti' =>'required',

        ]);
    
        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->parti = $request->parti;
        $candidat->save();
    
        return redirect('candidats/ajouter_candidat')->with('status','Le candidat a été ajouté avec succès.');
    
    }
    public function modifier_candidat($id) {
        $change = Candidat::find($id);
    
        return view('candidats.modifier_candidat',compact('change'));
    }
    
    public function modifier_candidat_traitement(Request $request){
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'parti' =>'required',

        ]);
    
            
        $candidat = Candidat::find($request->id);
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->parti = $request->parti;
        $candidat->update();
    
        return redirect('/candidats/candidat')->with('status','Le candidat a été modifié avec succès.');
    
    }
    public function supprimer_candidat($id){
        $candidat = Candidat::find($id);
        $candidat-> delete();
            
        return redirect('/candidats/candidat')->with('status','Le candidat a bien été supprimé.');
    }
    
    
    
}

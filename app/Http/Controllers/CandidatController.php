<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Programme;
use Illuminate\Http\Request;
use App\Http\Controllers\CandidatController;

class CandidatController extends Controller

{
     public function index()
    {
        $candidats = Candidat::all();
        return view('candidats.candidat',compact('candidats'));
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
            'photo' =>'required|image',
            'validation' =>'required',
            'biographie' =>'required',



        ]);

        $photo = $request->photo;
        $photo= $photo->store('images','public');
        
         


        $candidat = new Candidat();
        $candidat->validation =($request->validation=='on')? 1:0;
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->parti = $request->parti;
        $candidat->biographie = $request->biographie;
        $candidat->photo = $photo ;



        $candidat->save();
    
        return redirect('candidats/ajout_candidat')->with('status','Le candidat a été ajouté avec succès.');
    
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
            'photo' =>'required|image',
            'biographie' =>'required',
            'validation' =>'required',



        ]);
        $photo = $request->photo;
        $photo= $photo->store('images','public');
    
            
        $candidat = Candidat::find($request->id);
        $candidat->validation =($request->validation=='on')? 1:0;
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->parti = $request->parti;
        $candidat->biographie = $request->biographie;
        $candidat->photo = $photo ;



        $candidat->update();
    
        return redirect('/candidats/candidat')->with('status','Le candidat a été modifié avec succès.');
    
    }
    public function supprimer_candidat($id){
        $candidat = Candidat::find($id);
        $candidat-> delete();
            
        return redirect('/candidats/candidat')->with('status','Le candidat a bien été supprimé.');
    }
    
    
    
}

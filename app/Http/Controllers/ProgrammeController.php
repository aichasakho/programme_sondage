<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index()
    {
        $programmes = Programme::all();
        return view('programmes.programme', ['programmes' => $programmes]);
    }

    public function afficherProgrammeCandidat($candidat_id)
    {
        $candidat = Candidat::with('programmes')->find($candidat_id);

        return view('programmes.candidat1')->with('candidat', $candidat);
    }

    public function ajoutProgramme()
    {
        $candidats = Candidat::all();
        return view('programmes.ajouter_programme',compact('candidats'));
    }
    

    public function programmeSondage()
    {
        return view('programmes.sondage');
    }

    public function enregistrerProgramme(Request $request)
    {
        $request->validate([
            'candidat_id' =>'required',
            'description' => 'required',
            'secteur' => 'required',
            'document' => ['required','extensions:pdf,docx'],

        ]);
        $document=$request->document;
        $document=$document->store('document','public');
       

        $programme = new Programme();
        $programme->secteur = $request->input('secteur');
        $programme->candidat_id = $request->input('candidat_id');
        $programme->description = $request->input('description');
        $programme->document = $document;

        $candidat= Candidat::find($request->input('candidat_id'));
        $candidat->programmes()->save($programme);

        return redirect('/programmes/ajouter_programme')->with('status', 'Le programme a été ajouté avec succès.');
    }


    public function modifier_programme($id) {
        $change = Programme::find($id);
        $candidats = Candidat::all();
        
        return view('programmes.modifier_programme',compact('change', 'candidats'));
    }

    
    
   
    
    public function modifier_programme_traitement(Request $request){
        $request->validate([
            'candidat_id' =>'required',
            'description' => 'required',
            'secteur' => 'required',
            'document' => ['required','extensions:pdf,docx'],



        ]);
        $document=$request->document;
        $document=$document->store('document','public');
    
            
        $programme = new Programme();
        $programme->secteur = $request->input('secteur');
        $programme->candidat_id = $request->input('candidat_id');
        $programme->description = $request->input('description');
        $programme->document = $document;



        $programme->update();

        return redirect('/programmes/programme')->with('status','Le programme a été modifié avec succès.');
    
    }
    public function supprimer_programme($id){
        $programme = Programme::find($id);
        $programme-> delete();
            
        return redirect('/programmes/programme')->with('status','Le programme a bien été supprimé.');
    }
    
    
    
}


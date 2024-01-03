<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;
//use App\Models\LikesDislikes;

class ProgrammeController extends Controller
{
    public function index(){
        $liste = Programme::all();
        return view('programmes/programme',['liste' => $liste]);
         
     }


    public function programme_sonko(){
        
        return view('programmes/programme_sonko');
        
    }

    public function programme_macky(){
        
        return view('programmes/programme_macky');
    
    }
    public function ajout_programme()
    {
        return view('/programmes/ajouter_programme');
    }

    public function affiche(){
        $afficher = Programme::all();
        return view('programmes/programme_sonko',['afficher' => $afficher]);
         
     }

     public function store(Request $request)
     {
         $request->validate([
             'description' =>'required',
             'titre' =>'required',

         ]);
 
         $programme1 = new Programme();
         $programme1->description = $request->description;
         $programme1->titre = $request->titre;
         $programme1->save();
 
         return redirect('/programmes/ajouter_programme')->with('status','Le programme a été ajouté avec succès.');
 
     }
  

    /*public function store(Request $request)
    {
        // Récupérer les données du formulaire
        $programmeId = $request->input('programme_id');
        $likebutton = $request->input('likebutton');
        $dislikebutton = $request->input('dislikebutton');

        // Créer un nouvel enregistrement dans la table likes_dislikes
        $likesDislikes = new LikesDislikes();
        $likesDislikes->programme_id = $programmeId;
        $likesDislikes->likebutton = $likebutton;
        $likesDislikes->dislikebutton = $dislikebutton;
        $likesDislikes->save();

    }

    public function ajouter_programme_traitement(Request $request)
    {
        $request->validate([
            'description' =>'required',
        ]);

        $a = new Programme();
        $apprenant->description = $request->description;
        $apprenant->save();

        return redirect('/programmes/ajouter_programme')->with('status','Le programme a été ajouté avec succès.');

    }*/
}
/*



    public function index()
    {
        $afficher = Apprenant::all();
        return view('apprenants',compact('afficher'));
    }
    
   
    public function modifier_apprenant($id) {
        $changer = Apprenant::find($id);

        return view('modifier',compact('changer'));
    }
    public function modifier_apprenant_traitement(Request $request){
        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
        ]);

        
        $apprenant = Apprenant::find($request->id);
        $apprenant->nom = $request->nom;
        $apprenant->prenom = $request->prenom;
        $apprenant->update();

        return redirect('/apprenants')->with('status','L\'apprenant a été modifié avec succès.');

    }
    public function supprimer_apprenant($id){
        $enlever = Apprenant::find($id);
        $enlever-> delete();
        
        return redirect('/apprenants')->with('status','L\'apprenant a bien été supprimé.');
    }




}*/
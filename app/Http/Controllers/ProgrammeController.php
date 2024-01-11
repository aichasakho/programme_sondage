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
        return view('programmes.ajouter_programme');
    }

    public function enregistrerProgramme(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'description' => 'required',
            'parti' => 'required',
        ]);

        $candidat = Candidat::firstOrCreate([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
        ]);

        $programme = new Programme();
        $programme->description = $request->input('description');
        $programme->titre = $request->input('titre');

        $candidat->programmes()->save($programme);

        return redirect('/programmes/ajouter_programme')->with('status', 'Le programme a été ajouté avec succès.');
    }
}


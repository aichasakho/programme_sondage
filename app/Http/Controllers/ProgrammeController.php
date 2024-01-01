<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;

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
}

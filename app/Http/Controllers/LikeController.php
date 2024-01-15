<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Programme;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request, $programme_id)
    {
        $programme = Programme::findOrFail($programme_id);

        // Vérifier si l'utilisateur a déjà effectué une action de like ou dislike pour ce programme
        $like = Like::where('programme_id', $programme->id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($like) {

             
                $programme->dislikes_count = $programme->dislikes_count-1;
                $programme->save();
            

            // L'utilisateur a déjà effectué une action, donc nous mettons à jour l'action existante
            $like->type = 'like';
            $like->save();

        } else {
            // L'utilisateur n'a pas encore effectué d'action, nous créons une nouvelle entrée
            Like::create([
                'programme_id' => $programme->id,
                'user_id' => auth()->user()->id,
                'type' => 'like',
            ]);
        }

        // Mettre à jour le compteur de likes du programme
        $programme->increment('likes_count');

        // Répondre avec le nouveau nombre de likes
        return response()->json(['likeCount' => $programme->likes_count]);
    }

    public function dislike(Request $request, $programme_id)
    {
        $programme = Programme::findOrFail($programme_id);

        // Vérifier si l'utilisateur a déjà effectué une action de like ou dislike pour ce programme
        $like = Like::where('programme_id', $programme->id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($like) {
            
                $programme->likes_count = $programme->likes_count-1;
                $programme->save();    
            
            // L'utilisateur a déjà effectué une action, donc nous mettons à jour l'action existante
            $like->type = 'dislike';
            $like->save();
           

        } else {
            // L'utilisateur n'a pas encore effectué d'action, nous créons une nouvelle entrée
            Like::create([
                'programme_id' => $programme->id,
                'user_id' => auth()->user()->id,
                'type' => 'dislike',
            ]);
        }

        // Mettre à jour le compteur de dislikes du programme
        $programme->increment('dislikes_count');

        // Répondre avec le nouveau nombre de dislikes
        return response()->json(['dislikeCount' => $programme->dislikes_count]);
    }

    public function recupDonnees(){
      $programmes = Programme::all();
      $donnees = array();
      foreach($programmes as $programme){
      $donnees[]=[
        'programme_titre'=>$programme->secteur,
        'likesCount'=>$programme->likes_count,
        'dislikesCount'=>$programme->dislikes_count
      ];
      }  
      return response()->json($donnees);
    }
}
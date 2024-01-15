<?php

namespace App\Models;

use App\Models\Programme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'parti',
        'biographie',
        'validation',
        'photo',



    ];

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }
}

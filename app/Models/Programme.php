<?php

namespace App\Models;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Programme extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidat_id',
        'titre',
        'description',
    ];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

}

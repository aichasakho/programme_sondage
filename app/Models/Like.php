<?php

namespace App\Models;

use App\Models\Programme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';

    protected $fillable = [
        'programme_id',
        'user_id',
        'type',
    ];

    public function programme()
    {
        return $this->belongsTo(Programme::class,'programme_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
}


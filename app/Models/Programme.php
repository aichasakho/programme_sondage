<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Programme extends Model
{
    use HasFactory;

    protected $table = 'programmes';

    protected $fillable = [
        'candidat_id',
        'secteur',
        'description',
        'document',
        'likes_count',
        'dislikes_count',
    ];

   
    protected $appends = [
        'total_likes',
        'total_dislikes',
    ];

    public function getTotalLikesAttribute()
    {
        return $this->likes_count;
    }

    public function getTotalDislikesAttribute()
    {
        return $this->dislikes_count;
    }


    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'programme_id')->where('type', 'like');
    }

    public function dislikes()
    {
        return $this->hasMany(Like::class,'programme_id')->where('type', 'dislike');
    }

}




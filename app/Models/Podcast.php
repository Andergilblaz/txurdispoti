<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Podcast extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'created_at',
        'updated_at',
    ];

     public function users() 
     {
       return $this->belongsToMany(User::class, 'podcast_users');
    }
}

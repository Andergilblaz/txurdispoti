<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Playlist extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'descripcion',
        'created_at',
        'updated_at'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'playlist_user');
    }

    public function songs() {
       return  $this->hasMany(Song::class, 'playlist_id', 'id' );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'artista',
        'album',
        'playlist_id',
        'created_at',
        'updated_at'
    ];
    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'id', 'playlist_id');
    }


}

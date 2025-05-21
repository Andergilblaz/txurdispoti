<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PodcastUser extends Model
{
    protected $fillable = [
        'user_id',
        'podcast_id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['album_id', 'title', 'num_of_play', 'duration', 'explicit'];
}

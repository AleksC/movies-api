<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'director', 'imageUrl', 'duration', 'releaseDate', 'genre'
    ];

    public static function search($term) {
        return Movie::where('title', 'like','%' . $term . '%')->get();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpotifySong extends Model
{
    protected $table = 'spotify_songs';
    protected $primaryKey = 'track_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'track_id',
        'track_name',
        'track_artist',
        'track_popularity',
        'track_album_id',
        'track_album_name',
        'track_album_release_date',
        'playlist_name',
        'playlist_id',
        'playlist_genre',
        'playlist_subgenre',
        'danceability',
        'energy',
        'key',
        'loudness',
        'mode',
        'speechiness',
        'acousticness',
        'instrumentalness',
        'liveness',
        'valence',
        'tempo',
        'duration_ms',
    ];

    protected $casts = [
        'track_popularity' => 'integer',
        'track_album_release_date' => 'date',
        'danceability' => 'float',
        'energy' => 'float',
        'key' => 'integer',
        'loudness' => 'float',
        'mode' => 'boolean',
        'speechiness' => 'float',
        'acousticness' => 'float',
        'instrumentalness' => 'float',
        'liveness' => 'float',
        'valence' => 'float',
        'tempo' => 'float',
        'duration_ms' => 'integer',
    ];
}

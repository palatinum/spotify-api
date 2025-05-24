<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrackResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            /**
             * Unique identifier of the track
             * @example 008rk8F6ZxspZT4bUlkIQG
             */
            'id' => $this['id'],
            /**
             * Name of the track
             * @example Fever
             */
            'name' => $this['name'],
            /**
             * Artisan of the track
             * @example YOSA & TAAR
             */
            'artist' => $this['artist'],
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrackIdInvalidFormatResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            /**
             * Track ID format is invalid
             * @example "Track ID format is invalid."
             */
            'message' => $this['message'],
        ];
    }

    public function withResponse($request, $response): void
    {
        $response->setStatusCode(422);
    }
}

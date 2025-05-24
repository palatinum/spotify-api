<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrackIdEmptyResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            /**
             * Track ID cannot be empty
             * @example "Track ID cannot be empty."
             */
            'message' => $this->message,
        ];
    }

    public function withResponse($request, $response): void
    {
        $response->setStatusCode(400);
    }
}

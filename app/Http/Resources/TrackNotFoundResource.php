<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceResponse;

class TrackNotFoundResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            /**
             * Track not found
             * @example "Track with ID 008rk8F6ZxspZT4bUlkIQG not found."
             */
            'message' => $this['message'],
        ];
    }

    public function withResponse($request, $response): void
    {
        $response->setStatusCode(404);
    }
}

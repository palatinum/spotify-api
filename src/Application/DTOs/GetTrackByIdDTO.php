<?php

namespace Src\Application\DTOs;

readonly class GetTrackByIdDTO
{
    /**
     * @param string $trackId
     */
    public function __construct(
        private string $trackId
    ){}

    /**
     * @return string
     */
    public function getTrackId (): string
    {
        return $this->trackId;
    }
}

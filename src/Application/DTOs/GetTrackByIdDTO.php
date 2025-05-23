<?php

namespace Src\Application\DTOs;

use InvalidArgumentException;

readonly class GetTrackByIdDTO
{
    /**
     * @param string $trackId
     */
    public function __construct(
        private string $trackId
    ){
        $this->validate();
    }

    private function validate(): void
    {
        if (empty($this->trackId)) {
            throw new InvalidArgumentException("Track ID cannot be empty.");
        }
    }

    /**
     * @return string
     */
    public function getTrackId (): string
    {
        return $this->trackId;
    }
}

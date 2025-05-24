<?php

namespace Src\Application\DTOs;

use Src\Domain\Exceptions\TrackIdEmptyException;

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
            throw new TrackIdEmptyException();
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

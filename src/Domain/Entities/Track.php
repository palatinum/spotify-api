<?php

namespace Src\Domain\Entities;

use Src\Domain\ValueObjects\ArtistVO;
use Src\Domain\ValueObjects\NameVO;
use Src\Domain\ValueObjects\TrackIdVO;

readonly class Track
{
    /**
     * @param TrackIdVO $trackId
     * @param NameVO $name
     * @param ArtistVO $artist
     */
    public function __construct(
        private TrackIdVO $trackId,
        private NameVO    $name,
        private ArtistVO  $artist
    ){}

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->trackId->getValue(),
            'name' => $this->name->getValue(),
            'artist' => $this->artist->getValue(),
        ];
    }
}

<?php

namespace Src\Domain\Repositories;

use Src\Domain\Entities\Track;
use Src\Domain\ValueObjects\TrackIdVO;

interface TrackRepositoryInterface
{
    /**
     * @param TrackIdVO $trackId
     * @return Track
     */
    public function findById(TrackIdVO $trackId): Track;
}

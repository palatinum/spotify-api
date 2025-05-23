<?php

namespace Src\Domain\Exceptions;

use RuntimeException;
use Src\Domain\ValueObjects\TrackIdVO;

class TrackNotFoundException extends RuntimeException
{
    /**
     * @param TrackIdVO $trackId
     */
    public function __construct(TrackIdVO $trackId)
    {
        parent::__construct("Track with ID '{$trackId->getValue()}' not found.");
    }
}

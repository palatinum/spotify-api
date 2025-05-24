<?php

namespace Src\Domain\Exceptions;

use RuntimeException;

class TrackIdInvalidFormatException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("Track ID format is invalid.");
    }
}

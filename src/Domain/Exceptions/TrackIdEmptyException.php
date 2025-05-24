<?php

namespace Src\Domain\Exceptions;

use RuntimeException;
use Src\Domain\ValueObjects\TrackIdVO;

class TrackIdEmptyException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("Track ID cannot be empty.");
    }
}

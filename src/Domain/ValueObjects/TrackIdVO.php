<?php

namespace Src\Domain\ValueObjects;

use InvalidArgumentException;
use Src\Domain\Exceptions\TrackIdInvalidFormatException;
use Src\Shared\Domain\ValueObjects\StringVO;

class TrackIdVO extends StringVO
{
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct($value);
        $this->validate();
    }

    /**
     * @return void
     */
    private function validate(): void
    {
        if (!preg_match('/^[a-zA-Z0-9]{22}$/', $this->value)) {
            throw new TrackIdInvalidFormatException();
        }
    }
}

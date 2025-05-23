<?php

namespace Src\Shared\Domain\ValueObjects;

class StringVO
{
    protected string $value;

    /**
     * @param string $value
     */
    public function __construct(string $value) {
        $this->value = $value;
    }

    /**
     * @return string
     */
    final public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}

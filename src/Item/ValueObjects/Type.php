<?php

namespace Chapikas\Test\Item\ValueObjects;

use InvalidArgumentException;

final class Type
{
    private string $type;

    public function __construct(string $type) {
        $this->validate($type);

        $this->type = $type;
    }

    public function value(): string
    {
        return $this->type;
    }

    private function validate(string $type): void
    {
        if (strlen($type) > 10) {
            throw new InvalidArgumentException("Not valid type");
        }
    }
}
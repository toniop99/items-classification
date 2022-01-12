<?php

namespace Chapikas\Test\Item;

final class TypeCItem extends ValidatableItem
{

    /**
     * Custom validation Logic
     *
     */
    public function validate(): bool
    {
        return false;
    }
}
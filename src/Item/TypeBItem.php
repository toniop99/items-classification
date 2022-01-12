<?php

namespace Chapikas\Test\Item;

final class TypeBItem extends ValidatableItem
{

    /**
     * Custom validation Logic
     */
    public function validate(): bool
    {
        return true;
    }
}
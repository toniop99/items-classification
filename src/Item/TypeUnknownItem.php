<?php

namespace Chapikas\Test\Item;

final class TypeUnknownItem extends ValidatableItem
{

    /**
     * Custom validation Logic
     *
     */
    public function validate(): bool
    {
        // maybe some general validation or directly error
        return false;
    }
}
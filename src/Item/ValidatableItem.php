<?php

namespace Chapikas\Test\Item;

abstract class ValidatableItem extends Item
{
    abstract public function validate(): bool;
}
<?php

namespace Chapikas\Test\Item;

use Chapikas\Test\Item\ValueObjects\ProductId;
use Chapikas\Test\Item\ValueObjects\Type;
use JetBrains\PhpStorm\Pure;

abstract class Item
{
    public function __construct(protected Type $type, protected ProductId $productId) {}

    public function getType(): Type
    {
        return $this->type;
    }

    public function getProductId(): ProductId
    {
        return $this->productId;
    }

    /**
     * __toString
     *
     * @return string
     */
    #[Pure] public function __toString(): string
    {
        return "{$this->getType()->value()}, {$this->getProductId()->value()}";
    }

}
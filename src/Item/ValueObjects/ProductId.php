<?php

namespace Chapikas\Test\Item\ValueObjects;

use InvalidArgumentException;

final class ProductId
{
    private int $productId;

    public function __construct(int $productId) {
        $this->validate($productId);

        $this->productId = $productId;
    }

    public function value(): string
    {
        return $this->productId;
    }

    private function validate(int $productId): void
    {
        if ($productId < 0) {
            throw new InvalidArgumentException("Not valid product id");
        }
    }
}
<?php

namespace Chapikas\Test\Item;

use Chapikas\Test\Item\ValueObjects\ProductId;
use Chapikas\Test\Item\ValueObjects\Type;
use Chapikas\Test\TypeAIwtem;

final class ItemBuilder
{
    private const TYPE_A = 'type A';
    private const TYPE_B = 'type B';
    private const TYPE_C = 'type C';

    public static function classifyItem(string $type, int $productId): ValidatableItem
    {
        $type = new Type($type);
        $productId = new ProductId($productId);

        return match ($type->value()) {
            self::TYPE_A => new TypeAIwtem($type, $productId),
            self::TYPE_B => new TypeBItem($type, $productId),
            self::TYPE_C => new TypeCItem($type, $productId),
            default => new TypeUnknownItem($type, $productId),
        };
    }
}
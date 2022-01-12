<?php

namespace Chapikas\Test;

use Chapikas\Test\Item\ItemBuilder;
use Chapikas\Test\Item\ValidatableItem;

final class index
{
    /**
     * @var ValidatableItem[]
     */
    private array $items;

    public function __construct(array $giftCart)
    {
        // Parse the gift card.
        $rawItems = $giftCart['items'];

        $items = [];

        foreach ($rawItems as $item) {
            $type = $item['type'];
            $productId = $item['product_id'];

            $items[] = ItemBuilder::classifyItem($type, $productId);
        }

        $this->items = $items;
    }

    public function checkoutConfirmation () {
        $errors = [];
        // ...

        foreach ($this->items as $item) {
            $result = $item->validate();

            if (!$result) {
                // manage item fail
                $errors[] = 'El regalo ' . $item->getType()->value() . ' no puede ser canjeado.';
            }
        }

        if($errors) {
            return $errors;
        }

        // ...
    }

    public function onCartChange () {
        $errors = [];
        // ...

        foreach ($this->items as $item) {
            $result = $item->validate();

            if (!$result) {
                // manage item fail
                $errors[] = 'El regalo ' . $item->getType()->value() . ' no puede ser canjeado.';
            }
        }

        if($errors) {
            $errors[] = 'Hubo un error al realizar la acción del carrito';
            return $errors;
        }

        // ...
    }
}
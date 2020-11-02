<?php

namespace App;

class ProductStorage
{
    protected array $products;

    public function add(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
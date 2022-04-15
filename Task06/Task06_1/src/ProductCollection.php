<?php

namespace Makarovna\Task06_1;

class ProductCollection
{
    private $products = array();

    private function __construct(Product ...$products)
    {
        $this->products = $products;
    }

    public static function create(Product ...$products): ProductCollection
    {
        return new ProductCollection(...$products);
    }

    public function getProductsArray(): array
    {
        return $this->products;
    }

    public function filter(ProductFilteringStrategy $filterStrategy): ProductCollection
    {
        return new ProductCollection(...$filterStrategy->filter(...$this->products));
    }
}

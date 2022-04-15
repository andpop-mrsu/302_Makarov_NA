<?php

namespace Makarovna\Task06_1;

interface ProductFilteringStrategy
{
    public function filter(Product ...$products): array;
}
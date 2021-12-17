<?php

namespace Valensto\Project\Domain\Response;

use Valensto\Project\Domain\Entity\Product;

class ProductResponse
{

    /**
     * @var Product[]
     */
    private array $products = [];

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}

<?php

namespace Valensto\Project\Domain\Getaway;

use Valensto\Project\Domain\Entity\Product;

interface ProductGateway
{
    public function add(Product $product): void;


    /**
     * @return Product[]
     */
    public function list(): array;
}
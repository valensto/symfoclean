<?php

namespace App\Infrastructure\Repositories;

use Valensto\Project\Domain\Entity\Product;
use Valensto\Project\Domain\Getaway\ProductGateway;

class MemoryRepository implements ProductGateway
{
    public function add(Product $product): void
    {
        // TODO: Implement add() method.
    }

    public function list(): array
    {
        return [
            new Product("test 1", 33.00),
            new Product("test 2", 33.00),
            new Product("test 3", 33.00),
            new Product("test 4", 33.00),
            new Product("test 5", 33.00),
        ];
    }

}
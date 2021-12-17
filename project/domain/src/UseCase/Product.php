<?php

namespace Valensto\Project\Domain\UseCase;

use Valensto\Project\Domain\Getaway\ProductGateway;
use Valensto\Project\Domain\Presenter\ProductPresenterInterface;
use Valensto\Project\Domain\Response\ProductResponse;

class Product
{
    private ProductGateway $productGateway;

    /**
     * @param ProductGateway $productGateway
     */
    public function __construct(ProductGateway $productGateway)
    {
        $this->productGateway = $productGateway;
    }

    public function execute(ProductPresenterInterface $presenter): Void
    {
        $presenter->present(new ProductResponse($this->productGateway->list()));
    }
}

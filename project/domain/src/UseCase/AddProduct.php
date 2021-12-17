<?php

namespace Valensto\Project\Domain\UseCase;

use Valensto\Project\Domain\Getaway\ProductGateway;
use Valensto\Project\Domain\Request\AddProductRequest;
use Valensto\Project\Domain\Entity\Product;

class AddProduct
{
    private ProductGateway $productGateway;

    /**
     * @param ProductGateway $productGateway
     */
    public function __construct(ProductGateway $productGateway)
    {
        $this->productGateway = $productGateway;
    }


    public function execute(AddProductRequest $request):void{
        $product = new Product($request->getName(), $request->getPrice());
        $this->productGateway->add($product);
    }
}
<?php

namespace App\UserInterface\Controller;

use App\UserInterface\Presenter\ProductPresenter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Valensto\Project\Domain\Request\AddProductRequest;
use Valensto\Project\Domain\UseCase\AddProduct;
use Valensto\Project\Domain\UseCase\Product;

class ProductController
{
    public function list(Product $product, SerializerInterface $serializer): JsonResponse
    {
        $presenter = new ProductPresenter();
        $product->execute($presenter);

        return new JsonResponse($serializer->serialize($presenter->getProductViewModel(), "json"));
    }

    public function add(AddProduct $product, Request $request): JsonResponse{
        $request = new AddProductRequest("test 1", 22.00);

        $product->execute($request);

        return new JsonResponse(null, Response::HTTP_CREATED);
    }
}
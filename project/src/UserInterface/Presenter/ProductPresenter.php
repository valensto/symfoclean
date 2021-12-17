<?php

namespace App\UserInterface\Presenter;

use App\UserInterface\ViewModel\ProductViewModel;
use Valensto\Project\Domain\Presenter\ProductPresenterInterface;
use Valensto\Project\Domain\Response\ProductResponse;

class ProductPresenter implements ProductPresenterInterface
{

    private ProductViewModel $productViewModel;

    public function present(ProductResponse $productResp)
    {
        $this->productViewModel =  new ProductViewModel($productResp->getProducts());
    }

    /**
     * @return ProductViewModel
     */
    public function getProductViewModel(): ProductViewModel
    {
        return $this->productViewModel;
    }
}
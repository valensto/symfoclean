<?php

namespace App\UserInterface\ViewModel;

class ProductViewModel
{
    private $products = [];

    public function __construct($products) {
        $this->products = $products;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
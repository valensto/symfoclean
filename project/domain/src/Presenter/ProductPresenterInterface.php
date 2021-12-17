<?php

namespace Valensto\Project\Domain\Presenter;

use Valensto\Project\Domain\Response\ProductResponse;

interface ProductPresenterInterface
{
    /**
     * @param ProductResponse $productResp
     * @return mixed
     */
    public function present(ProductResponse $productResp);
}

<?php

namespace Musafir\Checkout\Repositories;

use Musafir\Core\Eloquent\Repository;

class CartItemRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Checkout\Contracts\CartItem';
    }

    /**
     * @param  int  $cartItemId
     * @return int
     */
    public function getProduct($cartItemId)
    {
        return $this->model->find($cartItemId)->product->id;
    }
}

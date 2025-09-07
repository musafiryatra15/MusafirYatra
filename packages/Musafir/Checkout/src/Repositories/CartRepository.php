<?php

namespace Musafir\Checkout\Repositories;

use Musafir\Core\Eloquent\Repository;

class CartRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Checkout\Contracts\Cart';
    }
}

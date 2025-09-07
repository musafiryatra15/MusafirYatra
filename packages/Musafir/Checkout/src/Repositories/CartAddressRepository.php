<?php

namespace Musafir\Checkout\Repositories;

use Musafir\Core\Eloquent\Repository;

class CartAddressRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Checkout\Contracts\CartAddress';
    }
}

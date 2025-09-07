<?php

namespace Musafir\CartRule\Repositories;

use Musafir\Core\Eloquent\Repository;

class CartRuleCustomerRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\CartRule\Contracts\CartRuleCustomer';
    }
}

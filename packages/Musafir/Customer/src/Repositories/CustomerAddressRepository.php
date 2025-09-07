<?php

namespace Musafir\Customer\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\Customer\Contracts\CustomerAddress;

class CustomerAddressRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return CustomerAddress::class;
    }
}

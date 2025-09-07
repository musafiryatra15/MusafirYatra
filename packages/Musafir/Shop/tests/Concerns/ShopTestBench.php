<?php

namespace Musafir\Shop\Tests\Concerns;

use Musafir\Customer\Contracts\Customer as CustomerContract;
use Musafir\Faker\Helpers\Customer as CustomerFaker;

trait ShopTestBench
{
    /**
     * Login as customer.
     */
    public function loginAsCustomer(?CustomerContract $customer = null): CustomerContract
    {
        $customer = $customer ?? (new CustomerFaker)->factory()->create();

        $this->actingAs($customer);

        return $customer;
    }
}

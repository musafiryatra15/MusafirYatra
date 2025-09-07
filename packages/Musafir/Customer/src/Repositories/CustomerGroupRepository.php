<?php

namespace Musafir\Customer\Repositories;

use Musafir\Core\Eloquent\Repository;

class CustomerGroupRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Customer\Contracts\CustomerGroup';
    }
}

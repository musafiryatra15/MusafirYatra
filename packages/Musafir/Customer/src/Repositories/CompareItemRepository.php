<?php

namespace Musafir\Customer\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\Customer\Contracts\CompareItem;

class CompareItemRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return CompareItem::class;
    }
}

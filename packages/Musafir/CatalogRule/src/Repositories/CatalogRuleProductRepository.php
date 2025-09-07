<?php

namespace Musafir\CatalogRule\Repositories;

use Musafir\Core\Eloquent\Repository;

class CatalogRuleProductRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\CatalogRule\Contracts\CatalogRuleProduct';
    }
}

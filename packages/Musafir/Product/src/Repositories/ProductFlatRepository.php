<?php

namespace Musafir\Product\Repositories;

use Musafir\Core\Eloquent\Repository;

class ProductFlatRepository extends Repository
{
    /**
     * Specify model.
     */
    public function model(): string
    {
        return 'Musafir\Product\Contracts\ProductFlat';
    }
}

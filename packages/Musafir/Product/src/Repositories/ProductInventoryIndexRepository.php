<?php

namespace Musafir\Product\Repositories;

use Musafir\Core\Eloquent\Repository;

class ProductInventoryIndexRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Product\Contracts\ProductInventoryIndex';
    }
}

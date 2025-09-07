<?php

namespace Musafir\Inventory\Repositories;

use Musafir\Core\Eloquent\Repository;

class InventorySourceRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Inventory\Contracts\InventorySource';
    }
}

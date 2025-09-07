<?php

namespace Musafir\Tax\Repositories;

use Musafir\Core\Eloquent\Repository;

class TaxMapRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Tax\Contracts\TaxMap';
    }
}

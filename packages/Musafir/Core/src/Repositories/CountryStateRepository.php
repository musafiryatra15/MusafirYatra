<?php

namespace Musafir\Core\Repositories;

use Musafir\Core\Eloquent\Repository;

class CountryStateRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Core\Contracts\CountryState';
    }
}

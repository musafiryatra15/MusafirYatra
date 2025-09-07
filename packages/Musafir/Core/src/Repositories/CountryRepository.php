<?php

namespace Musafir\Core\Repositories;

use Musafir\Core\Eloquent\Repository;

class CountryRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Core\Contracts\Country';
    }
}

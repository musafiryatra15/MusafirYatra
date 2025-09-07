<?php

namespace Musafir\Marketing\Repositories;

use Musafir\Core\Eloquent\Repository;

class SearchTermRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Marketing\Contracts\SearchTerm';
    }
}

<?php

namespace Musafir\DataGrid\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\DataGrid\Contracts\SavedFilter;

class SavedFilterRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return SavedFilter::class;
    }
}

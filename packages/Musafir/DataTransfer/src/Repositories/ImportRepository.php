<?php

namespace Musafir\DataTransfer\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\DataTransfer\Contracts\Import;

class ImportRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return Import::class;
    }
}

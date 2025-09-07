<?php

namespace Musafir\DataTransfer\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\DataTransfer\Contracts\ImportBatch;

class ImportBatchRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return ImportBatch::class;
    }
}

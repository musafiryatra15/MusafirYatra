<?php

namespace Musafir\Tax\Repositories;

use Musafir\Core\Eloquent\Repository;

class TaxRateRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Tax\Contracts\TaxRate';
    }
}

<?php

namespace Musafir\Core\Repositories;

use Musafir\Core\Eloquent\Repository;

class ExchangeRateRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Core\Contracts\CurrencyExchangeRate';
    }
}

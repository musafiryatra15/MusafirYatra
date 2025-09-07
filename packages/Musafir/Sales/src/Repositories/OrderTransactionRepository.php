<?php

namespace Musafir\Sales\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\Sales\Contracts\OrderTransaction;

class OrderTransactionRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return OrderTransaction::class;
    }
}

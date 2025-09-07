<?php

namespace Musafir\BookingProduct\Repositories;

use Musafir\BookingProduct\Contracts\BookingProductTableSlot;
use Musafir\Core\Eloquent\Repository;

class BookingProductTableSlotRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return BookingProductTableSlot::class;
    }
}

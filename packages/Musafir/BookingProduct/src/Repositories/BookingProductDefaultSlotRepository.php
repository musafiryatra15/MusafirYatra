<?php

namespace Musafir\BookingProduct\Repositories;

use Musafir\BookingProduct\Contracts\BookingProductDefaultSlot;
use Musafir\Core\Eloquent\Repository;

class BookingProductDefaultSlotRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return BookingProductDefaultSlot::class;
    }
}

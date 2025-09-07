<?php

namespace Musafir\BookingProduct\Repositories;

use Musafir\BookingProduct\Contracts\BookingProductRentalSlot;
use Musafir\Core\Eloquent\Repository;

class BookingProductRentalSlotRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return BookingProductRentalSlot::class;
    }
}

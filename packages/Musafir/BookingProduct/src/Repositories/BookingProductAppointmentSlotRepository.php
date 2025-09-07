<?php

namespace Musafir\BookingProduct\Repositories;

use Musafir\BookingProduct\Contracts\BookingProductAppointmentSlot;
use Musafir\Core\Eloquent\Repository;

class BookingProductAppointmentSlotRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return BookingProductAppointmentSlot::class;
    }
}

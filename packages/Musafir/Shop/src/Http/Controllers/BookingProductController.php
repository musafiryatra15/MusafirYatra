<?php

namespace Musafir\Shop\Http\Controllers;

use Illuminate\Http\Resources\Json\JsonResource;
use Musafir\BookingProduct\Helpers\AppointmentSlot as AppointmentSlotHelper;
use Musafir\BookingProduct\Helpers\DefaultSlot as DefaultSlotHelper;
use Musafir\BookingProduct\Helpers\EventTicket as EventTicketHelper;
use Musafir\BookingProduct\Helpers\RentalSlot as RentalSlotHelper;
use Musafir\BookingProduct\Helpers\TableSlot as TableSlotHelper;
use Musafir\BookingProduct\Repositories\BookingProductRepository;

class BookingProductController extends Controller
{
    protected array $bookingHelpers = [];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected BookingProductRepository $bookingProductRepository,
        protected DefaultSlotHelper $defaultSlotHelper,
        protected AppointmentSlotHelper $appointmentSlotHelper,
        protected RentalSlotHelper $rentalSlotHelper,
        protected EventTicketHelper $eventTicketHelper,
        protected TableSlotHelper $tableSlotHelper
    ) {
        $this->bookingHelpers = [
            'default'     => $this->defaultSlotHelper,
            'appointment' => $this->appointmentSlotHelper,
            'rental'      => $this->rentalSlotHelper,
            'event'       => $this->eventTicketHelper,
            'table'       => $this->tableSlotHelper,
        ];
    }

    /**
     * Get available slots for the given product and the date.
     */
    public function index(int $id): JsonResource
    {
        $bookingProduct = $this->bookingProductRepository->find($id);

        return new JsonResource([
            'data' => $this->bookingHelpers[$bookingProduct->type]->getSlotsByDate($bookingProduct, request()->date),
        ]);
    }
}

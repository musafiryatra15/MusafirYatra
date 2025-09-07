<?php

namespace Musafir\Notification\Listeners;

use Musafir\Notification\Events\CreateOrderNotification;
use Musafir\Notification\Events\UpdateOrderNotification;
use Musafir\Notification\Repositories\NotificationRepository;

class Order
{
    /**
     * Create a new listener instance.
     *
     * @return void
     */
    public function __construct(protected NotificationRepository $notificationRepository) {}

    /**
     * Create a new resource.
     *
     * @return void
     */
    public function createOrder($order)
    {
        $this->notificationRepository->create(['type' => 'order', 'order_id' => $order->id]);

        event(new CreateOrderNotification);
    }

    /**
     * Fire an Event when the order status is updated.
     *
     * @return void
     */
    public function updateOrder($order)
    {
        event(new UpdateOrderNotification([
            'id'     => $order->id,
            'status' => $order->status,
        ]));
    }
}

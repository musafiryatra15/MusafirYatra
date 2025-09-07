<?php

namespace Musafir\Product\Listeners;

use Musafir\Product\Jobs\UpdateCreateInventoryIndex as UpdateCreateInventoryIndexJob;

class Refund
{
    /**
     * After refund is created
     *
     * @param  \Musafir\Sale\Contracts\Refund  $refund
     * @return void
     */
    public function afterCreate($refund)
    {
        $productIds = $refund->items
            ->pluck('product_id')
            ->toArray();

        UpdateCreateInventoryIndexJob::dispatch($productIds);
    }
}

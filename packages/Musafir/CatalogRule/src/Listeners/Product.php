<?php

namespace Musafir\CatalogRule\Listeners;

use Musafir\CatalogRule\Jobs\UpdateCreateProductIndex as UpdateCreateProductIndexJob;

class Product
{
    /**
     * @param  \Musafir\Product\Contracts\Product  $product
     * @return void
     */
    public function afterUpdate($product)
    {
        UpdateCreateProductIndexJob::dispatch($product);
    }
}

<?php

namespace Musafir\Product\Facades;

use Illuminate\Support\Facades\Facade;
use Musafir\Product\ProductImage as BaseProductImage;

class ProductImage extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseProductImage::class;
    }
}

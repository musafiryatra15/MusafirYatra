<?php

use Musafir\Product\Facades\ProductImage;
use Musafir\Product\Facades\ProductVideo;
use Musafir\Product\Helpers\Toolbar;

if (! function_exists('product_image')) {
    /**
     * Product image helper.
     *
     * @return \Musafir\Product\ProductImage
     */
    function product_image()
    {
        return ProductImage::getFacadeRoot();
    }
}

if (! function_exists('product_video')) {
    /**
     * Product video helper.
     *
     * @return \Musafir\Product\ProductVideo
     */
    function product_video()
    {
        return ProductVideo::getFacadeRoot();
    }
}

if (! function_exists('product_toolbar')) {
    /**
     * Product tolbar helper.
     *
     * @return \Musafir\Product\Helpers\Toolbar
     */
    function product_toolbar()
    {
        return app()->make(Toolbar::class);
    }
}

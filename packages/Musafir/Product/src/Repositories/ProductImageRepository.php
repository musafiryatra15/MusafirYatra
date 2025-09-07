<?php

namespace Musafir\Product\Repositories;

class ProductImageRepository extends ProductMediaRepository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Product\Contracts\ProductImage';
    }
}

<?php

namespace Musafir\Product\Repositories;

class ProductVideoRepository extends ProductMediaRepository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Product\Contracts\ProductVideo';
    }
}

<?php

namespace Musafir\Product\Repositories;

use Musafir\Core\Eloquent\Repository;

class ProductReviewRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Product\Contracts\ProductReview';
    }

    /**
     * Retrieve review for customerId
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCustomerReview()
    {
        $reviews = $this->model
            ->where(['customer_id' => auth()->guard('customer')->user()->id])
            ->with('product')
            ->paginate(5);

        return $reviews;
    }
}

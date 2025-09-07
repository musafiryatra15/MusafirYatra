<?php

namespace Musafir\Product\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Musafir\Customer\Models\CustomerGroupProxy;
use Musafir\Product\Contracts\ProductCustomerGroupPrice as ProductCustomerGroupPriceContract;
use Musafir\Product\Database\Factories\ProductCustomerGroupPriceFactory;

class ProductCustomerGroupPrice extends Model implements ProductCustomerGroupPriceContract
{
    use HasFactory;

    /**
     * Add fillable property to the model.
     *
     * @var array
     */
    protected $fillable = [
        'qty',
        'value_type',
        'value',
        'product_id',
        'customer_group_id',
        'unique_id',
    ];

    /**
     * Get the product that owns the customer group price.
     */
    public function product()
    {
        return $this->belongsTo(ProductProxy::modelClass());
    }

    /**
     * Get the product that owns the customer group price.
     */
    public function customer_group()
    {
        return $this->belongsTo(CustomerGroupProxy::modelClass());
    }

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return ProductCustomerGroupPriceFactory::new();
    }
}

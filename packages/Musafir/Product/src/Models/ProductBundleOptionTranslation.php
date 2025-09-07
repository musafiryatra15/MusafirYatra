<?php

namespace Musafir\Product\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Musafir\Product\Contracts\ProductBundleOptionTranslation as ProductBundleOptionTranslationContract;
use Musafir\Product\Database\Factories\ProductBundleOptionTranslationFactory;

class ProductBundleOptionTranslation extends Model implements ProductBundleOptionTranslationContract
{
    /**
     * Set timestamp false.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Set fillable property to the model.
     *
     * @var array
     */
    protected $fillable = ['label'];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return ProductBundleOptionTranslationFactory::new();
    }
}

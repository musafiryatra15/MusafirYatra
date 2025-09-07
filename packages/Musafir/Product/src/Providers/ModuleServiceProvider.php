<?php

namespace Musafir\Product\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Product\Models\Product::class,
        \Musafir\Product\Models\ProductAttributeValue::class,
        \Musafir\Product\Models\ProductBundleOption::class,
        \Musafir\Product\Models\ProductBundleOptionProduct::class,
        \Musafir\Product\Models\ProductBundleOptionTranslation::class,
        \Musafir\Product\Models\ProductCustomerGroupPrice::class,
        \Musafir\Product\Models\ProductCustomizableOption::class,
        \Musafir\Product\Models\ProductCustomizableOptionPrice::class,
        \Musafir\Product\Models\ProductCustomizableOptionTranslation::class,
        \Musafir\Product\Models\ProductDownloadableLink::class,
        \Musafir\Product\Models\ProductDownloadableSample::class,
        \Musafir\Product\Models\ProductFlat::class,
        \Musafir\Product\Models\ProductGroupedProduct::class,
        \Musafir\Product\Models\ProductImage::class,
        \Musafir\Product\Models\ProductInventory::class,
        \Musafir\Product\Models\ProductInventoryIndex::class,
        \Musafir\Product\Models\ProductOrderedInventory::class,
        \Musafir\Product\Models\ProductPriceIndex::class,
        \Musafir\Product\Models\ProductReview::class,
        \Musafir\Product\Models\ProductReviewAttachment::class,
        \Musafir\Product\Models\ProductSalableInventory::class,
        \Musafir\Product\Models\ProductVideo::class,
    ];
}

<?php

namespace Musafir\Product\Repositories;

use Illuminate\Support\Str;
use Musafir\Core\Eloquent\Repository;
use Musafir\Product\Contracts\ProductCustomizableOptionPrice;

class ProductCustomizableOptionPriceRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return ProductCustomizableOptionPrice::class;
    }

    /**
     * Save customizable option prices.
     *
     * @param  array  $data
     * @param  \Musafir\Product\Contracts\ProductCustomizableOption  $productCustomizableOption
     * @return void
     */
    public function saveCustomizableOptionPrices($data, $productCustomizableOption)
    {
        $previousCustomizableOptionPriceIds = $productCustomizableOption->customizable_option_prices()->pluck('id');

        if (isset($data['prices'])) {
            foreach ($data['prices'] as $customizableOptionPriceId => $customizableOptionPriceInputs) {
                if (Str::contains($customizableOptionPriceId, 'price_')) {
                    $this->create(array_merge([
                        'product_customizable_option_id' => $productCustomizableOption->id,
                    ], $customizableOptionPriceInputs));
                } else {
                    if (is_numeric($index = $previousCustomizableOptionPriceIds->search($customizableOptionPriceId))) {
                        $previousCustomizableOptionPriceIds->forget($index);
                    }

                    $this->update($customizableOptionPriceInputs, $customizableOptionPriceId);
                }
            }
        }

        foreach ($previousCustomizableOptionPriceIds as $previouscustomizableOptionPriceId) {
            $this->delete($previouscustomizableOptionPriceId);
        }
    }
}

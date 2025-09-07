<?php

namespace Musafir\CatalogRule\Listeners;

use Musafir\CatalogRule\Jobs\DeleteCatalogRuleIndex as DeleteCatalogRuleIndexJob;
use Musafir\CatalogRule\Jobs\UpdateCreateCatalogRuleIndex as UpdateCreateCatalogRuleIndexJob;
use Musafir\CatalogRule\Repositories\CatalogRuleProductPriceRepository;
use Musafir\CatalogRule\Repositories\CatalogRuleRepository;

class CatalogRule
{
    /**
     * Create a new listener instance.
     *
     * @return void
     */
    public function __construct(
        protected CatalogRuleRepository $catalogRuleRepository,
        protected CatalogRuleProductPriceRepository $catalogRuleProductPriceRepository
    ) {}

    /**
     * @param  \Musafir\CatalogRule\Contracts\CatalogRule  $catalogRule
     * @return void
     */
    public function afterUpdateCreate($catalogRule)
    {
        UpdateCreateCatalogRuleIndexJob::dispatch($catalogRule);
    }

    /**
     * @param  int  $catalogRuleId
     * @return void
     */
    public function beforeUpdate($catalogRuleId)
    {
        $catalogRule = $this->catalogRuleRepository->find($catalogRuleId);

        $productIds = $catalogRule->catalog_rule_products->pluck('product_id')->unique();

        $this->catalogRuleProductPriceRepository->deleteWhere(['catalog_rule_id' => $catalogRuleId]);

        DeleteCatalogRuleIndexJob::dispatch($productIds->toArray());
    }

    /**
     * @param  int  $catalogRuleId
     * @return void
     */
    public function beforeDelete($catalogRuleId)
    {
        $catalogRule = $this->catalogRuleRepository->find($catalogRuleId);

        $productIds = $catalogRule->catalog_rule_products->pluck('product_id')->unique();

        $this->catalogRuleProductPriceRepository->deleteWhere(['catalog_rule_id' => $catalogRuleId]);

        DeleteCatalogRuleIndexJob::dispatch($productIds->toArray());
    }
}

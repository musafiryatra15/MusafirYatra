<?php

namespace Musafir\CatalogRule\Console\Commands;

use Illuminate\Console\Command;
use Musafir\CatalogRule\Helpers\CatalogRuleIndex;

class PriceRuleIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:price-rule:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically updates catalog rule price index information (eg. rule_price)';

    /**
     * Create a new command instance.
     *
     * @param  \Musafir\CatalogRuleProduct\Helpers\CatalogRuleIndex  $catalogRuleIndexHelper
     * @return void
     */
    public function __construct(protected CatalogRuleIndex $catalogRuleIndexHelper)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->catalogRuleIndexHelper->reIndexComplete();
    }
}

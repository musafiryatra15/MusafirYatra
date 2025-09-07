<?php

namespace Musafir\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Musafir\Core\ElasticSearch as BaseElasticSearch;

class ElasticSearch extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseElasticSearch::class;
    }
}

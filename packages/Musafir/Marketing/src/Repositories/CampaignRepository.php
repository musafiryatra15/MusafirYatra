<?php

namespace Musafir\Marketing\Repositories;

use Musafir\Core\Eloquent\Repository;

class CampaignRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Marketing\Contracts\Campaign';
    }
}

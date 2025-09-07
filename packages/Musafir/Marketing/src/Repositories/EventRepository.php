<?php

namespace Musafir\Marketing\Repositories;

use Musafir\Core\Eloquent\Repository;

class EventRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\Marketing\Contracts\Event';
    }
}

<?php

namespace Musafir\Sales\Repositories;

use Musafir\Core\Eloquent\Repository;

class OrderCommentRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Sales\Contracts\OrderComment';
    }
}

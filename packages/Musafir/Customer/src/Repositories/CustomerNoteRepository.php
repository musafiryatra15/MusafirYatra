<?php

namespace Musafir\Customer\Repositories;

use Musafir\Core\Eloquent\Repository;

class CustomerNoteRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Customer\Contracts\CustomerNote';
    }
}

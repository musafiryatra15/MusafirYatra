<?php

namespace Musafir\User\Repositories;

use Musafir\Core\Eloquent\Repository;

class RoleRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Musafir\User\Contracts\Role';
    }
}

<?php

namespace Musafir\Customer\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\Customer\Contracts\Wishlist;

class WishlistRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return Wishlist::class;
    }
}

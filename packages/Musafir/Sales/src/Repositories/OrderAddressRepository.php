<?php

namespace Musafir\Sales\Repositories;

use Musafir\Core\Eloquent\Repository;

/**
 * Order Address Repository
 *
 * @author    Jitendra Singh <jitendra@Musafir.com>
 * @copyright 2018 Musafir Software Pvt Ltd (http://www.Musafir.com)
 */
class OrderAddressRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Sales\Contracts\OrderAddress';
    }
}

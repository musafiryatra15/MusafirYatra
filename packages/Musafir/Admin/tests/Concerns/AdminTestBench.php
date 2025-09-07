<?php

namespace Musafir\Admin\Tests\Concerns;

use Musafir\User\Contracts\Admin as AdminContract;
use Musafir\User\Models\Admin as AdminModel;

trait AdminTestBench
{
    /**
     * Login as customer.
     */
    public function loginAsAdmin(?AdminContract $admin = null): AdminContract
    {
        $admin = $admin ?? AdminModel::factory()->create();

        $this->actingAs($admin, 'admin');

        return $admin;
    }
}

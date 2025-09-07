<?php

namespace Musafir\Admin\Listeners;

class Admin
{
    /**
     * Send mail on updating password.
     *
     * @param  \Musafir\User\Models\Admin  $admin
     * @return void
     */
    public function afterPasswordUpdated($admin) {}
}

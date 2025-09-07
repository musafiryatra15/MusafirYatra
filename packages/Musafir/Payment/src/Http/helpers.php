<?php

use Musafir\Payment\Facades\Payment;

if (! function_exists('payment')) {
    /**
     * Payment helper.
     *
     * @return \Musafir\Payment\Payment
     */
    function payment()
    {
        return Payment::getFacadeRoot();
    }
}

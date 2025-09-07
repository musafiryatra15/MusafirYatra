<?php

use Musafir\MagicAI\Facades\MagicAI;

if (! function_exists('magic_ai')) {
    /**
     * MagicAI helper.
     *
     * @return \Musafir\MagicAI\MagicAI
     */
    function magic_ai()
    {
        return MagicAI::getFacadeRoot();
    }
}

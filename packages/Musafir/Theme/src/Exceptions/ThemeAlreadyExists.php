<?php

namespace Musafir\Theme\Exceptions;

class ThemeAlreadyExists extends \Exception
{
    /**
     * Create an instance.
     *
     * @param  \Musafir\Theme\Theme  $theme
     * @return void
     */
    public function __construct($theme)
    {
        parent::__construct("Theme {$theme->name} already exists", 1);
    }
}

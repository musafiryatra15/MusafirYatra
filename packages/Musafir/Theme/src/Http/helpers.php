<?php

use Musafir\Theme\Facades\Themes;
use Musafir\Theme\ViewRenderEventManager;

if (! function_exists('themes')) {
    /**
     * Themes.
     *
     * @return \Musafir\Theme\Themes
     */
    function themes()
    {
        return Themes::getFacadeRoot();
    }
}

if (! function_exists('musafiryatra_asset')) {
    /**
     * MusafirYatra asset.
     *
     * @return string
     */
    function musafiryatra_asset(string $path, ?string $namespace = null)
    {
        return themes()->url($path, $namespace);
    }
}

if (! function_exists('view_render_event')) {
    /**
     * View render event.
     *
     * @param  string  $eventName
     * @param  mixed  $params
     * @return mixed
     */
    function view_render_event($eventName, $params = null)
    {
        app()->singleton(ViewRenderEventManager::class);

        $viewEventManager = app()->make(ViewRenderEventManager::class);

        $viewEventManager->handleRenderEvent($eventName, $params);

        return $viewEventManager->render();
    }
}

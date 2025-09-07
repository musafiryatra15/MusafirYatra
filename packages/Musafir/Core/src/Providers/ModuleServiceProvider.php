<?php

namespace Musafir\Core\Providers;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Core\Models\Channel::class,
        \Musafir\Core\Models\CoreConfig::class,
        \Musafir\Core\Models\Country::class,
        \Musafir\Core\Models\CountryState::class,
        \Musafir\Core\Models\CountryStateTranslation::class,
        \Musafir\Core\Models\CountryTranslation::class,
        \Musafir\Core\Models\Currency::class,
        \Musafir\Core\Models\CurrencyExchangeRate::class,
        \Musafir\Core\Models\Locale::class,
        \Musafir\Core\Models\SubscribersList::class,
        \Musafir\Core\Models\Visit::class,
    ];
}

<?php

namespace Lucacalcaterra\FilamentItalianCities\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lucacalcaterra\FilamentItalianCities\FilamentItalianCities
 */
class FilamentItalianCities extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lucacalcaterra\FilamentItalianCities\FilamentItalianCities::class;
    }
}

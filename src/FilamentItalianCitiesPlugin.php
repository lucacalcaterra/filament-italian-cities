<?php

namespace Lucacalcaterra\FilamentItalianCities;

use Filament\Panel;
use Filament\Contracts\Plugin;
use Lucacalcaterra\FilamentItalianCities\Filament\Resources;
use Lucacalcaterra\FilamentItalianCities\Filament\Resources\CityResource;

class FilamentItalianCitiesPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-italian-cities';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                CityResource::class
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}

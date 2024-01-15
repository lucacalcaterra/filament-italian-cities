<?php

namespace Lucacalcaterra\FilamentItalianCities\Commands;

use Illuminate\Console\Command;

class FilamentItalianCitiesCommand extends Command
{
    public $signature = 'filament-italian-cities';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

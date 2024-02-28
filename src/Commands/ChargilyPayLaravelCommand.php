<?php

namespace KaraOdin\ChargilyPayLaravel\Commands;

use Illuminate\Console\Command;

class ChargilyPayLaravelCommand extends Command
{
    public $signature = 'chargily-pay-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

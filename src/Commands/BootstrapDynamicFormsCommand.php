<?php

namespace Worthcoding\BootstrapDynamicForms\Commands;

use Illuminate\Console\Command;

class BootstrapDynamicFormsCommand extends Command
{
    public $signature = 'bootstrap-dynamic-forms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

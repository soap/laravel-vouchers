<?php

namespace Soap\Vouchers\Commands;

use Illuminate\Console\Command;

class VouchersCommand extends Command
{
    public $signature = 'laravel-vouchers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

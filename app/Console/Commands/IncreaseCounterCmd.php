<?php

namespace App\Console\Commands;

use App\Jobs\IncreaseCacheJob;
use Illuminate\Console\Command;

class IncreaseCounterCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:increase-counter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        IncreaseCacheJob::dispatch();
    }
}

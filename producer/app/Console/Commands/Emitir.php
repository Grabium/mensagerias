<?php

namespace App\Console\Commands;

use App\Jobs\ExemploJob;
use Illuminate\Console\Command;

class Emitir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emitir';

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
        ExemploJob::dispatch(
            [
                'action' => 'create',
                'name'   => fake()->name
            ]
        );
    }
}

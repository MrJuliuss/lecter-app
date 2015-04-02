<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class LecterInstall extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'lecter:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install lecter';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
         $this->call('vendor:publish');
    }
}

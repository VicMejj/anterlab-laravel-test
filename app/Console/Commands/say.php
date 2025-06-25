<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class say extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'say:hello {name}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'System say hello to the user';


    /**
     * Execute the console command.
     */
    public function handle()
{
    $name = $this->argument('name');
    $this->info("System callin ..., $name 👋 ");
    $this->comment('System is happy to see you! 😊');
}
}

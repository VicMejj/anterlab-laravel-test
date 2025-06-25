<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class VickyGo extends Command
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
    protected $description = 'Vicky say hello to the user';


    /**
     * Execute the console command.
     */
    public function handle()
{
    $name = $this->argument('name');
    $this->info("Vicky callin ..., $name 👋 ");
    $this->comment('Vicky is happy to see you! 😊');
}
}

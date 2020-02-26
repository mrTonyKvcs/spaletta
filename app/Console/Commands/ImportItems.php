<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-menu-items';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the menu items!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $jsonString = file_get_contents(base_path('/public/items.json'));
        dd($jsonString);

        $items = json_decode($jsonString, true);

        dd($items);
    }
}

<?php

namespace Modules\PhotoGallery\Console\Commands;

use Illuminate\Console\Command;

class PhotoGalleryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:PhotoGalleryCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'PhotoGallery Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}

<?php

namespace Modules\PhotoGallery\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\PhotoGallery\Models\PhotoGallery;

class PhotoGalleryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * PhotoGalleries Seed
         * ------------------
         */

        // DB::table('photogalleries')->truncate();
        // echo "Truncate: photogalleries \n";

        PhotoGallery::factory()->count(20)->create();
        $rows = PhotoGallery::all();
        echo " Insert: photogalleries \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

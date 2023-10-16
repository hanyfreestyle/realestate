<?php

namespace Database\Seeders\admin;

use App\Models\admin\ListingTranslation;
use App\Models\admin\PostTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingTranslationSeeder extends Seeder
{

    public function run(): void
    {
        ini_set('memory_limit', '512M');
        ListingTranslation::unguard();
        $tablePath = public_path('db/SQLDumpSplitterResult/listing_translations_DataStructure.sql');
        DB::unprepared(file_get_contents($tablePath));


        $tablePath = public_path('db/SQLDumpSplitterResult/listing_translations_1.sql');
        DB::unprepared(file_get_contents($tablePath));

        $tablePath = public_path('db/SQLDumpSplitterResult/listing_translations_2.sql');
        DB::unprepared(file_get_contents($tablePath));

        $tablePath = public_path('db/SQLDumpSplitterResult/listing_translations_3.sql');
        DB::unprepared(file_get_contents($tablePath));

        $tablePath = public_path('db/SQLDumpSplitterResult/listing_translations_4.sql');
        DB::unprepared(file_get_contents($tablePath));

        $tablePath = public_path('db/SQLDumpSplitterResult/listing_translations_5.sql');
        DB::unprepared(file_get_contents($tablePath));


        $updatePost = ListingTranslation::where('name',null)->get();
        foreach ($updatePost as $post){
            $post->delete();
        }

    }
}

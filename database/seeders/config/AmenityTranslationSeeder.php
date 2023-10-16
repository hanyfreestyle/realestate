<?php

namespace Database\Seeders\config;

use App\Models\admin\config\AmenityTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenityTranslationSeeder extends Seeder
{

    public function run(): void
    {
        AmenityTranslation::unguard();
        $tablePath = public_path('db/amenity_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}

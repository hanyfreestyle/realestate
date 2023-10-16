<?php

namespace Database\Seeders\config;

use App\Models\admin\config\Amenity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitySeeder extends Seeder
{

    public function run(): void
    {

        Amenity::unguard();
        $tablePath = public_path('db/amenities.sql');
        DB::unprepared(file_get_contents($tablePath));

    }
}

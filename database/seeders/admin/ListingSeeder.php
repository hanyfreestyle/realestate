<?php

namespace Database\Seeders\admin;

use App\Models\admin\Developer;
use App\Models\admin\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingSeeder extends Seeder
{


    public function run(): void
    {

        Listing::unguard();
        $tablePath = public_path('db/listings.sql');
        DB::unprepared(file_get_contents($tablePath));

    }
}

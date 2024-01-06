<?php

namespace Database\Seeders\admin;

use App\Models\admin\Page;
use App\Models\admin\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{

    public function run(): void
    {
        Page::unguard();
        $tablePath = public_path('db/pages.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}

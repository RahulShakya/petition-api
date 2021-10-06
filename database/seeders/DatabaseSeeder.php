<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Petition::factory(10)->create();
        // DB::table('petitions')->insert([
        // 	'title'=>Str::random(10),
        // 	'category'=>Str::random(10),
        // 	'description'=>Str::random(100),
        // 	'author'=>Str::random(100),
        // ]);
    }
}

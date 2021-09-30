<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_categories')->insert([
            [
                'name' => 'স্থাবর',
            ],
            [
                'name' => 'অস্থাবর',
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class BicyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bicycles')->insert([
            ['brand' => 'Orbea', 'model' => 'Sky'],
            ['brand' => 'BH', 'model' => 'Gacela'],
        ]);
    }
}

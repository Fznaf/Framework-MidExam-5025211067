<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class itemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $type = ['food', 'electronics', 'vehicles'];
    
        foreach ($type as $type) {
            DB::table('itemType')->insert([
                'itemType' => $type
            ]);
        }
    }
}

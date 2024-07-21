<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Faker::create();

        for($i=0; $i<10; $i++){
            DB::table('categories')->insert([
                'name' => $fake->text(25),
                'image' => 'https://gcs.tripi.vn/public-tripi/tripi-feed/img/474094wnI/anh-doremon-dang-yeu_033146112.png',
            ]);
        }
    }
}

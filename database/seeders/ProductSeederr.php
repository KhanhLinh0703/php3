<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeederr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $fake->text(35),
                'category_id' => rand(1, 10),
                'image_thumbnail' => 'https://phunuvietnam.mediacdn.vn/thumb_w/1098/179072216278405120/2022/11/4/edogawa-conan-166754179290680712885-99-0-599-800-crop-16675420578791554659379.jpg',
                'price_regular' => rand(500, 1000),
                'price_sale' => rand(400, 500),
                'description' => $fake->text(150),
                'material' => $fake->text(10),
                'view' => rand(100, 9000),
            ]);
        }
    }
}

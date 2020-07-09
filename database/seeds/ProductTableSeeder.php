<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $data = [];
        $faker = Faker::create();
        
        foreach( range(1, 100) as $index )
        {
            $data[] = [
                'name' => rtrim($faker->sentence(rand(1, 3), '.')),
                'slug' => str_slug($faker->sentence()),
                'details' => $faker->sentence(rand(1, 4)),
                'price'   => rand(150000, 350000),
                'description' => $faker->paragraphs(rand(1,3), true)
            ];
        }

        DB::table('products')->insert($data);
    }
}

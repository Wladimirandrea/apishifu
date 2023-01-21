<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys_id= Category::table('categories')->pluck('id');
        //guardar 20 registros
        foreach (range(1,50) as $index) {
            Product::table('products')->insert([
            'nombre' => Str::random(10),
            'category_id' => $faker->randomElement($categorys_id)
            ]);
        }
    }
}

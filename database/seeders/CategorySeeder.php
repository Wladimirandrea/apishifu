<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'name' => 'Mujeres',


        ]);
        category::create([
            'name' => 'Hombres',

        ]);
        category::create([
            'name' => 'maquillaje',
            'category_id' => '1',

        ]);
        category::create([
            'name' => 'vaina pa la cara',
            'category_id' => '3',

        ]);




    }
}

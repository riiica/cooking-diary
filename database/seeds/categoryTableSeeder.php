<?php

use Illuminate\Database\Seeder;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'recipe_id' => 1,
                'category_name' => 'Main Dish',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'category_name' => 'Side Dish',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'category_name' => 'Dessert',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}

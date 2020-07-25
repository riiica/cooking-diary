<?php

use Illuminate\Database\Seeder;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient')->insert([
            [
                'recipe_id' => 1,
                'ingredient_name' => 'ほうれん草',
                'ingredient_detail' => '2束',
                'ingredient_num' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'ingredient_name' => '人参',
                'ingredient_detail' => '1/2本',
                'ingredient_num' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'ingredient_name' => '卵',
                'ingredient_detail' => '2個',
                'ingredient_num' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'ingredient_name' => 'マヨネーズ',
                'ingredient_detail' => '大さじ1/2',
                'ingredient_num' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'ingredient_name' => 'ごま油',
                'ingredient_detail' => '大さじ1',
                'ingredient_num' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'ingredient_name' => '鶏がらスープの素',
                'ingredient_detail' => '小さじ1',
                'ingredient_num' => 6,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'ingredient_name' => '塩コショウ',
                'ingredient_detail' => '適量',
                'ingredient_num' => 7,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}

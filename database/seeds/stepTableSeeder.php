<?php

use Illuminate\Database\Seeder;

class stepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('step')->insert([
            [
                'recipe_id' => 1,
                'step_detail' => 'ボールに卵を割り入れ、マヨネーズを加えてよく混ぜる',
                'step_num' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'step_detail' => 'ほうれん草を4cm間隔で切り、人参は短冊切りにする',
                'step_num' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'step_detail' => 'フライパンにごま油を敷き、切ったほうれん草と人参を炒める',
                'step_num' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'step_detail' => '具材にある程度火が通ったら、鶏がらスープの素を加えて軽くかき混ぜる',
                'step_num' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'recipe_id' => 1,
                'step_detail' => '手順1で用意したものを加えてかき混ぜ、ある程度卵が固まってきたら完成',
                'step_num' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}

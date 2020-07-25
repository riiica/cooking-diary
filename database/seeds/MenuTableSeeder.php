<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            [
                'menu_name' => 'ほうれん草と人参の中華風炒め',
                'menu_photo' => 'chinese_style_stir.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'menu_name' => 'ピーマンとしらすの醤油炒め',
                'menu_photo' => 'green_pepper_stir_fry.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'menu_name' => 'トマトとしらすのサラダ',
                'menu_photo' => 'sirasu_tomato_salad.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PracticeMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practice_menus')->insert([
            [
                'id' => 1,
                'practice_subcategory_id' => 1,
                'name' => 'メジャースケール'
            ],
            [
                'id' => 2,
                'practice_subcategory_id' => 1,
                'name' => 'マイナースケール'
            ],
            [
                'id' => 3,
                'practice_subcategory_id' => 2,
                'name' => 'クロマチック'
            ],
            [
                'id' => 4,
                'practice_subcategory_id' => 3,
                'name' => 'メジャーコード'
            ],
            [
                'id' => 5,
                'practice_subcategory_id' => 3,
                'name' => 'マイナーコード'
            ],
            [
                'id' => 6,
                'practice_subcategory_id' => 4,
                'name' => 'チェンジアップ'
            ],
            [
                'id' => 7,
                'practice_subcategory_id' => 5,
                'name' => 'アラベスク1番 ドビュッシー',
            ],
            [
                'id' => 8,
                'practice_subcategory_id' => 6,
                'name' => 'ハノン'
            ],
            [
                'id' => 9,
                'practice_subcategory_id' => 7,
                'name' => 'ブルース'
            ],
            [
                'id' => 10,
                'practice_subcategory_id' => 8,
                'name' => '過去問 2019年東京藝術大学作曲科',
            ],

            [
                'id' => 11,
                'practice_subcategory_id' => 9,
                'name' => '採譜'
            ],
            [
                'id' => 12,
                'practice_subcategory_id' => 9,
                'name' => '譜読み'
            ],
        ]);
    }
}

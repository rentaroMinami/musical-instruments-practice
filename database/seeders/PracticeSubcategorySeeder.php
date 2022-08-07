<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PracticeSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practice_subcategories')->insert([
            [
                'id' => 1,
                'practice_category_id' => 1,
                'name' => 'スケール'
            ],
            [
                'id' => 2,
                'practice_category_id' => 1,
                'name' => 'クロマチック'
            ],
            [
                'id' => 3,
                'practice_category_id' => 1,
                'name' => 'コードトーン'
            ],
            [
                'id' => 4,
                'practice_category_id' => 1,
                'name' => 'リズム'
            ],
            [
                'id' => 5,
                'practice_category_id' => 2,
                'name' => '楽譜'
            ],
            [
                'id' => 6,
                'practice_category_id' => 2,
                'name' => '教則本'
            ],
            [
                'id' => 7,
                'practice_category_id' => 3,
                'name' => 'アドリブ'
            ],
            [
                'id' => 8,
                'practice_category_id' => 3,
                'name' => 'ソルフェージュ'
            ],
            [
                'id' => 9,
                'practice_category_id' => 3,
                'name' => 'その他'
            ],
        ]);

    }
}

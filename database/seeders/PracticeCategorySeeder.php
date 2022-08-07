<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PracticeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practice_categories')->insert([
            [
                'id' => 1,
                'name' => '基礎練習'
            ],
            [
                'id' => 2,
                'name' => '楽譜/教則本'
            ],
            [
                'id' => 3,
                'name' => 'その他'
            ],
        ]);

    }
}

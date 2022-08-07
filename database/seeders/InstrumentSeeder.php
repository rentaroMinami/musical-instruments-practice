<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instruments')->insert([
            [
                'id' => 1,
                'name' => 'ギター',
            ],
            [
                'id' => 2,
                'name' => 'ベース',
            ],
            [
                'id' => 3,
                'name' => 'ドラム',
            ],
            [
                'id' => 4,
                'name' => 'ピアノ',
            ],
            [
                'id' => 5,
                'name' => 'シンセサイザー',
            ],
            [
                'id' => 6,
                'name' => 'カホン',
            ],
            [
                'id' => 7,
                'name' => 'ヴァイオリン',
            ],
            [
                'id' => 8,
                'name' => 'ヴィオラ',
            ],
            [
                'id' => 9,
                'name' => 'チェロ',
            ],
            [
                'id' => 10,
                'name' => 'コントラバス',
            ],
        ]);
    }
}

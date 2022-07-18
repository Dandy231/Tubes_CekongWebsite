<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Courier;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courier::insert([
            [
                'code' => 'jne',
                'title' => 'Jalur Nugraha Ekakurir (JNE)',
            ],
            [
                'code' => 'pos',
                'title' => 'POS Indonesia',
            ],
            [
                'code' => 'tiki',
                'title' => 'TIKI',
            ]
        ]);
    }
}

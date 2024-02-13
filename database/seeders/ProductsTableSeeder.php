<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone XR 64GB',
                'description' => 'Смартфон с высокой автономностью, прекрасным экраном и низким весом.',
                'price' => 54999,
                'category' => 'Смартфоны',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Acer Nitro 5',
                'description' => 'Высокопроизводительный ноутбук, для гейминга везде.',
                'price' => 85950,
                'category' => 'Ноутбуки',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Кофемашина Garlyn L1000',
                'description' => 'Компактная кофемашина, с широким набором возможностей.',
                'price' => 39779,
                'category' => 'Кофемашины',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy S23+',
                'description' => 'Мощный телефон с большими возможностями в использовании.',
                'price' => 78990,
                'category' => 'Телефоны',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Холодильник Thomson BFC30EN05',
                'description' => 'Надежный холодильник, с множеством полок',
                'price' => 29699,
                'category' => 'Холодильники',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HUAWEI MateBook D 16',
                'description' => 'Компактный легкий ноутбук, с ярким экраном и высокими показателями автономности.',
                'price' => 46788,
                'category' => 'Ноутбуки',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

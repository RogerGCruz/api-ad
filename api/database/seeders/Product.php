<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Fakerino\Fakerino;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakerino = Fakerino::create();

        DB::table('products')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'name' => 'Celular 1',
            'price' => 1800,
            'description' => 'Lorenzo ipsum',
        ]);

        DB::table('products')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'name' => 'Celular 2',
            'price' => 3200,
            'description' => 'Lorenzo ipsum Dolor',
        ]);

        DB::table('products')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'name' => 'Celular 3',
            'price' => 9800,
            'description' => 'Lorem ipsum dolor sit amet',
        ]);
    }
}

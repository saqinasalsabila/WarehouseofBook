<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'title' => 'Sejarah Kota Atlantis',
            'writer' => 'Salsabila',
            'price' => 67000,
            'stock' => 5
        ]);
        DB::table('products')->insert([
            'title' => 'Kisah 25 Nabi dan Rasul',
            'writer' => 'Maulidia',
            'price' => 34000,
            'stock' => 3
        ]);

        DB::table('products')->insert([
            'title' => '300++ NCT Fun Facts',
            'writer' => 'Nurannisa',
            'price' => 63000,
            'stock' => 4
        ]);

    }
}

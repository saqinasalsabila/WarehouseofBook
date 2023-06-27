<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_details')->insert([
            'order_id' => 1,
            'product_id' => 1,
            'amount' => 1
        ]);
        DB::table('order_details')->insert([
            'order_id' => 1,
            'product_id' => 2,
            'amount' => 1
        ]);
        DB::table('order_details')->insert([
            'order_id' => 1,
            'product_id' => 3,
            'amount' => 1
        ]);


        DB::table('order_details')->insert([
            'order_id' => 2,
            'product_id' => 1,
            'amount' => 2
        ]);
        DB::table('order_details')->insert([
            'order_id' => 2,
            'product_id' => 3,
            'amount' => 3
        ]);


        DB::table('order_details')->insert([
            'order_id' => 3,
            'product_id' => 2,
            'amount' => 4
        ]);
        DB::table('order_details')->insert([
            'order_id' => 3,
            'product_id' => 3,
            'amount' => 3
        ]);
        
    }
}

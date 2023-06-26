<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'username'=>'nadhNadh12',
            'name'=>'Nadhira Nurannisa',
            'address'=>'JL Watumujur II No.11, Ketawanggede, Malang',
            'email'=>'nadhira@gmail.com',
            'telp'=>85735934562
        ]);
        DB::table('customers')->insert([
            'username'=>'saqina_s',
            'name'=>'Saqina Salsabila',
            'address'=>'JL Watumujur II No.12, Ketawanggede, Malang',
            'email'=>'saqina@gmail.com',
            'telp'=>85735934561
        ]);
        DB::table('customers')->insert([
            'username'=>'cacaaa_',
            'name'=>'Verizca Maulidia',
            'address'=>'JL Watumujur II No.7, Ketawanggede, Malang',
            'email'=>'verizca@gmail.com',
            'telp'=>85735934563
        ]);
        DB::table('customers')->insert([
            'username'=>'juliarina_',
            'name'=>'Julia Nur Fajrina',
            'address'=>'JL Watumujur II No.9, Ketawanggede, Malang',
            'email'=>'julia@gmail.com',
            'telp'=>85735934565
        ]);
    }
}

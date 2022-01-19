<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class KategoriUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_umum')->insert([
            [
                'kategori' => 'Green Buildings',
                'id_smart' => '1' //cuma buat testing, jd data dummy
            ],
            [
                'kategori' => 'Community',
                'id_smart' => '2'
            ],
            [
                'kategori' => 'Industry',
                'id_smart' => '3'
            ],
            [
                'kategori' => 'E-Government',
                'id_smart' => '4'
            ],
            [
                'kategori' => 'Tourism',
                'id_smart' => '5'
            ],
            [
                'kategori' => 'Health',
                'id_smart' => '6'
            ],
            [
                'kategori' => 'Protection',
                'id_smart' => '6'
            ],
        ]);
    }
}

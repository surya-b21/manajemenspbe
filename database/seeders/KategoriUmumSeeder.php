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
                'kategori' => 'kesehatan'
            ],
            [
                'kategori' => 'pendidikan'
            ],
            [
                'kategori' => 'budaya'
            ],
            [
                'kategori' => 'pariwisata'
            ],
        ]);
    }
}
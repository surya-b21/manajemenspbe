<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class KategoriForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create('id_kf');
        DB::table('kategori_forum')->insert([
            [
                'parent' => '0',
                'kategori' => 'Manajemen SPBE',
                'level' => '1'
            ],
            [
                'parent' => '0',
                'kategori' => 'Layanan Publik',
                'level' => '1'
            ],
            [
                'parent' => '1',
                'kategori' => 'Manajemen Risiko SPBE',
                'level' => '2'
            ],
            [
                'parent' => '1',
                'kategori' => 'Manajemen SDM SPBE',
                'level' => '2'
            ],
            [
                'parent' => '2',
                'kategori' => 'Aduan Masyarakat',
                'level' => '2'
            ],
            [
                'parent' => '2',
                'kategori' => 'Satu Data',
                'level' => '2'
            ],
            [
                'parent' => '2',
                'kategori' => 'Produk Hukum',
                'level' => '2'
            ],
        ]);
    }
}
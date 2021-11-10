<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class InovasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id');
        DB::table('inovasi')->insert([
            [
                'nama' => $faker->sentence(mt_rand(2, 5)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'deskripsi' => collect($faker->paragraphs(mt_rand(1, 7)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'layanan_spbe' => 'Layanan Administrasi Pemerintah',
                'id_opd' => mt_rand(1, 3),
                'id_ku' => mt_rand(1, 4),
                'tgl_launching' => $faker->dateTime(),
                'tgl_upload' => $faker->dateTime(),
                'created_at' => $faker->dateTime(),
            ],
            [
                'nama' => $faker->sentence(mt_rand(2, 5)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'deskripsi' => collect($faker->paragraphs(mt_rand(1, 7)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'layanan_spbe' => 'Layanan Publik',
                'id_opd' => mt_rand(1, 3),
                'id_ku' => mt_rand(1, 4),
                'tgl_launching' => $faker->dateTime(),
                'tgl_upload' => $faker->dateTime(),
                'created_at' => $faker->dateTime(),
            ]
        ]);
    }
}
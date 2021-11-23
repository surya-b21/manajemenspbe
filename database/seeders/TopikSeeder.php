<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class TopikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Forum\Topik::factory(5)->create();
        $faker = Factory::create('id');
        DB::table('topik_forum')->insert([
            [
                'judul' => $faker->sentence(mt_rand(2, 8)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'isi' => collect($faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'id_user' => mt_rand(1, 5),
                'id_kf' => mt_rand(3, 7),
                'created_at' => $faker->dateTime(),
            ],
            [
                'judul' => $faker->sentence(mt_rand(2, 8)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'isi' => collect($faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'id_user' => mt_rand(1, 5),
                'id_kf' => mt_rand(3, 7),
                'created_at' => $faker->dateTime(),
            ],
            [
                'judul' => $faker->sentence(mt_rand(2, 8)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'isi' => collect($faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'id_user' => mt_rand(1, 5),
                'id_kf' => mt_rand(3, 7),
                'created_at' => $faker->dateTime(),
            ],
            [
                'judul' => $faker->sentence(mt_rand(2, 8)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'isi' => collect($faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'id_user' => mt_rand(1, 5),
                'id_kf' => mt_rand(3, 7),
                'created_at' => $faker->dateTime(),
            ],
            [
                'judul' => $faker->sentence(mt_rand(2, 8)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'isi' => collect($faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'id_user' => mt_rand(1, 5),
                'id_kf' => mt_rand(3, 7),
                'created_at' => $faker->dateTime(),
            ],
            [
                'judul' => $faker->sentence(mt_rand(2, 8)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'isi' => collect($faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'id_user' => mt_rand(1, 5),
                'id_kf' => mt_rand(3, 7),
                'created_at' => $faker->dateTime(),
            ],
            [
                'judul' => $faker->sentence(mt_rand(2, 8)),
                // 'isi' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
                'isi' => collect($faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
                'id_user' => mt_rand(1, 5),
                'id_kf' => mt_rand(3, 7),
                'created_at' => $faker->dateTime(),
            ],
        ]);
    }
}
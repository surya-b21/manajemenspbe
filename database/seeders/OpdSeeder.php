<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class OpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        DB::table('opd')->insert([
            [
                'id' => 1,
                'nama_opd' => "Dinas Kesehatan",
                'alamat' => $faker->address(),
                'telepon' => $faker->phoneNumber(),
                'email' => $faker->email(),
            ],
            [
                'id_opd' => 2,
                'nama_opd' => "Dinas Sosial",
                'alamat' => $faker->address(),
                'telepon' => $faker->phoneNumber(),
                'email' => $faker->email(),
            ],
            [
                'id_opd' => 3,
                'nama_opd' => "Dinas Lingkungan Hidup",
                'alamat' => $faker->address(),
                'telepon' => $faker->phoneNumber(),
                'email' => $faker->email(),
            ]
        ]);
    }
}
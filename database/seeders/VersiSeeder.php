<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VersiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('versi')->insert([
            [
                'nama' => 'Versi 2.0',
                'deskripsi' => 'pada versi 2.0 terdapat beberapa fitur seperti :',
                'tgl_versi' => '2021-12-23',
                'status' => '1',
                'id_dev' => '1',
                'id_inovasi' => '1',
            ],
            [
                'nama' => 'Versi 2.1',
                'deskripsi' => 'pada versi 2.1 terdapat beberapa fitur',
                'tgl_versi' => '2021-12-30',
                'status' => '1',
                'id_dev' => '1',
                'id_inovasi' => '1',
            ],
            [
                'nama' => 'Versi 1.0 Inovasi 2',
                'deskripsi' => 'pada versi 1.0 telah dilakukan pengambilan api dari sistem informasi ',
                'tgl_versi' => '2021-12-30',
                'status' => '1',
                'id_dev' => '1',
                'id_inovasi' => '2',
            ],
        ]);
    }
}

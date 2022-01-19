<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokumen')->insert([
            [
                'judul' => 'Dokumen inovasi 1',
                'file_path' => 'public/dokumen/Dokumen inovasi 1.pdf',
                'id_inovasi' => '1',
            ],
            [
                'judul' => 'Dokumen 2 Inovasi 1',
                'file_path' => 'public/dokumen/Dokumen 2 Inovasi 1.pdf',
                'id_inovasi' => '1',
            ],
            [
                'judul' => 'Dokumen Inovasi 2',
                'file_path' => 'public/dokumen/Dokumen Inovasi 2.pdf',
                'id_inovasi' => '2',
            ],
        ]);
    }
}

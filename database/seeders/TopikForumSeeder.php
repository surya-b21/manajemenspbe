<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopikForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topik_forum')->insert([
            [
                'judul' => 'Solo Punya SPBKLU ?',
                'isi' => 'Walikota Surakarta, Gibran Rakabuming meresmikan Stasiun Pengisian Kendaraan Listrik Umum (SPKLU) pertama di Kota Surakarta. SPKLU ini berlokasi di halaman kantor PLN Unit Pelaksana Pelayanan Pelanggan (UP3) Surakarta Jl.Slamet Riyadi No.468 Surakarta
                Pembangunan Stasiun Pengisian Kendaraan Listrik Umum (SPKLU) pertama di Kota Surakarta ini merupakan komitmen PLN untuk mendukung green energy untuk Indonesia langit biru dan sebagai tindak lanjut Peraturan Presiden No. 55 Tahun 2019 tentang Percepatan Program Kendaraan Bermotor Listrik Berbasis Baterai untuk Transportasi Jalan pada 12 agustus 2019. (Sumber: instagram @pemkot_solo)',
                'foto_path' => 'public/forum/hn7EKSvtSVkitopsKxla9dpnExvlK8jQaX0ttbKy.jpg',
                'id_user' => 1,
                'id_kf' => 3,
            ],
            [
                'judul' => 'Topik 2',
                'isi' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                'foto_path' => 'public/forum/hn7EKSvtSVkitopsKxla9dpnExvlK8jQaX0ttbKy.jpg',
                'id_user' => '2',
                'id_kf' => '3',
            ],
            [
                'judul' => 'Topik 3',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                'foto_path' => 'public/forum/Topik 3.png',
                'id_user' => '5',
                'id_kf' => '4',
            ],
            [
                'judul' => 'Topik 4',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
                'foto_path' => 'public/forum/Topik 4.png',
                'id_user' => '3',
                'id_kf' => '5',
            ],

        ]);
    }
}

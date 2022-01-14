<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KontenInovasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inovasi')->insert([
            [
                'nama' => 'Pemerintah Kota Surakarta Luncurkan Inovasi Perubahan Pelayanan Publik Berbasis Satu Data 1',
                'deskripsi' => '(Senin, 17/8/20) Bertepatan dengan HUT RI ke 75 tahun setelah kegiatan upacara detik-detik proklamasi, Walikota Surakarta, Fx Hadi Rudyatmo meluncurkan Inovasi Perubahan Pelayanan Publik di Pendapi Gede Kota Surakarta.

                Inovasi perubahan yang diluncurkan adalah 3 Proyek Perubahan, 15 Aksi Perubahan kinerja Organisasi, 3 Aksi Perubahan Kinerja Pelayanan Publik. Ini semua sebagai perwujudan dari 5 mantap yang selama ini dikembangkan Walikota dan Wakil Walikota Surakarta yaitu mantap kejujuran, mantap kedisiplinan, mantap pelayanan, mantap organisasi dan mantap gotong royong, tutur Kepala Bapppeda Surakarta, Tulus Widayat dalam sambutannya.
                
                Dengan adanya Inovasi Perubahan ini diharapkan Pemerintahan Kota Surakarta dapat menunjukan pemerintahan yang efektif, efisien, transparan dan akuntabel berbasis satu data.
                
                Salah satu inovasi perubahan yang diluncurkan adalah Sistem Pemesanan Sewa Lahan dan Perolehan Data Pengunjung secara digital di Kawasan Wisata Balekambang dengan aplikasi Ruang Kreatif.',
                'layanan_spbe' => 'Layanan Publik',
                'tgl_launching' => '2020-08-18',
                'tgl_upload' => '2021-11-13',
                'poster_path' => 'public/inovasi/39uzGwrTghsI6rAcCvTIdKhwI6ZEeC0WNreP6D4U.jpg',
                'status' => '2',
                'id_opd' => '1',
                'id_ku' => '2',
            ],
        ]);
    }
}

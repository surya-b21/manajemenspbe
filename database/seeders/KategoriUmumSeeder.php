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
                'kategori' => 'Pendidikan',
                'id_opd' => '7',
                'id_smart' => '2',
                'jenis_urusan' => 'Urusan Wajib Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Kesehatan',
                'id_opd' => '1',
                'id_smart' => '6',
                'jenis_urusan' => 'Urusan Wajib Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Pekerjaan Umum dan Penataan Ruang',
                'id_opd' => '1',
                'id_smart' => '6',
                'jenis_urusan' => 'Urusan Wajib Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Perumahan dan Kawasan Permukiman',
                'id_opd' => '1',
                'id_smart' => '6',
                'jenis_urusan' => 'Urusan Wajib Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Ketentraman dan Ketertiban Umum serta Perlindungan Masyarakat',
                'id_opd' => '1',
                'id_smart' => '2',
                'jenis_urusan' => 'Urusan Wajib Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Sosial',
                'id_opd' => '2',
                'id_smart' => '2',
                'jenis_urusan' => 'Urusan Wajib Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Tenaga Kerja',
                'id_opd' => '1',
                'id_smart' => '2',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Pemberdayaan Perempuan dan Perlindungan Anak',
                'id_opd' => '1',
                'id_smart' => '2',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Pangan',
                'id_opd' => '1',
                'id_smart' => '3',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Pertanahan',
                'id_opd' => '1',
                'id_smart' => '1',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Lingkungan Hidup',
                'id_opd' => '3',
                'id_smart' => '1',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Administrasi Kependudukan dan Pencatatan Sipil',
                'id_opd' => '1',
                'id_smart' => '6',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Pemberdayaan Masyarakat dan Desa',
                'id_opd' => '1',
                'id_smart' => '2',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Pengendalian Penduduk dan Keluarga Berencana',
                'id_opd' => '1',
                'id_smart' => '2',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Perhubungan',
                'id_opd' => '5',
                'id_smart' => '6',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Komunikasi dan Informatika',
                'id_opd' => '1',
                'id_smart' => '4',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Koperasi, Usaha Kecil, dan Menengah',
                'id_opd' => '1',
                'id_smart' => '3',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Penanaman Modal Daerah',
                'id_opd' => '1',
                'id_smart' => '4',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Kepemudaan dan Olahraga',
                'id_opd' => '1',
                'id_smart' => '2',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Statistik',
                'id_opd' => '1',
                'id_smart' => '4',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Persandian',
                'id_opd' => '1',
                'id_smart' => '5',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Kebudayaan',
                'id_opd' => '1',
                'id_smart' => '5',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Perpustakaan',
                'id_opd' => '1',
                'id_smart' => '4',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Kearsipan',
                'id_opd' => '1',
                'id_smart' => '3',
                'jenis_urusan' => 'Urusan Wajib Tidak Berkaitan Pelayanan Dasar',
            ],
            [
                'kategori' => 'Kelautan dan Perikanan',
                'id_opd' => '1',
                'id_smart' => '6',
                'jenis_urusan' => 'Urusan Pilihan',
            ],
            [
                'kategori' => 'Pariwisata',
                'id_opd' => '1',
                'id_smart' => '5',
                'jenis_urusan' => 'Urusan Pilihan',
            ],
            [
                'kategori' => 'Pertanian',
                'id_opd' => '1',
                'id_smart' => '3',
                'jenis_urusan' => 'Urusan Pilihan',
            ],
            [
                'kategori' => 'Perdagangan',
                'id_opd' => '1',
                'id_smart' => '3',
                'jenis_urusan' => 'Urusan Pilihan',
            ],
            [
                'kategori' => 'Perindustrian',
                'id_opd' => '1',
                'id_smart' => '3',
                'jenis_urusan' => 'Urusan Pilihan',
            ],
            [
                'kategori' => 'Transmigrasi',
                'id_opd' => '1',
                'id_smart' => '1',
                'jenis_urusan' => 'Urusan Pilihan',
            ],



        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ESmartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elemen_smart')->insert([
            [
                'element' => 'Smart Environment',
                'deskripsi' => 'Smart Environment adalah pembangunan kota yang memperhatikan keseimbangan pembangunan infrastruktur 
                fisik maupun sarana prasarana berwawasan lingkungan dan berkelanjutan.'
            ],
            [
                'element' => 'Smart Society',
                'deskripsi' => 'Smart Society adalah tata kelola untuk mewujudkan ekosistem masyarakat yang humanis dan dinamis.'
            ],
            [
                'element' => 'Smart Economy',
                'deskripsi' => 'Smart Economy adalah tata kelola perekonomian untuk mewujudkan perekonomian daerah yang mampu memenuhi 
                tantangan di era informasi yang berkembang dan menuntut tingkat adaptasi yang cepat.'
            ],
            [
                'element' => 'Smart Government',
                'deskripsi' => 'Smart Government adalah tata kelola pemerintah yang mampu mengubah pola-pola tradisional dalam birokrasi
                sehingga menghasilkan layanan yang lebih cepat, efektif, efisien, komunikatif, dan selalu melakukan perbaikan.'
            ],
            [
                'element' => 'Smart Branding',
                'deskripsi' => 'Smart Branding adalah inovasi dalam memasarkan daerah, sehingga mampu meningkatkan daya saing dan nilai 
                jual daerah dengan mengembangkan tiga elemen yaitu pariwisata, bisnis, dan wajah kota.'
            ],
            [
                'element' => 'Smart Living',
                'deskripsi' => 'Smart Living adalah kelayakan taraf hidup masyarakat yang dinilai dari tiga elemen yaitu kelayakan 
                pola hidup, kualitas kesehatan, dan moda transportasi untuk mendukung mobilitas orang dan barang.'
            ],
        ]);
    }
}
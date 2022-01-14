<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KomentarForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komentar_forum')->insert([
            [
                'isi' => 'mantappp',
                'id_user' => '1',
                'id_topik' => '1',
            ],
            [
                'isi' => 'kami warga solo mengaku bangga dan mengapresiasi adanya SPBKLU di Solo',
                'id_user' => '2',
                'id_topik' => '2',
            ],
            [
                'isi' => 'cek',
                'id_user' => '1',
                'id_topik' => '2',
            ],
        ]);
    }
}

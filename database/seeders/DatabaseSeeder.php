<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\Forum\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            OpdSeeder::class,
            UserSeeder::class,
            KategoriForumSeeder::class,
            KategoriUmumSeeder::class,
            ESmartSeeder::class,
            // TopikSeeder::class,
        ]);
    }
}
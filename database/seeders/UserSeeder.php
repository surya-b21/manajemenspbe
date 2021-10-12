<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = \App\Models\Role::first();
        \App\Models\User::factory(5)->create()
            ->each(function($user) use ($role) {
            $user->roles()->sync([$role->id]);
        });
    }
}

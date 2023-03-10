<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Paterne Mawoussi TCHAGNONSI',
        //     'email' => 'tchatomap21@gmail.com',
        // ]);
    }
}

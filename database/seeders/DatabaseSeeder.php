<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::factory(19)->create();
        $this->call(MahasiswaSeeder::class);
    }
}

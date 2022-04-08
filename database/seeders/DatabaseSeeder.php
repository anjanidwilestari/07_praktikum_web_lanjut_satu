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
        $this->call(MahasiswaSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(MahasiswaMataKuliahSeeder::class);
        $this->call(MataKuliahSeeder::class);
        $this->call(UpdateMahasiswaSeeder::class);
    }
}

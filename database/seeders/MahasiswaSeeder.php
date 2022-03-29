<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'nim' => '2041720180',
            'nama' => 'Anjani Dwilestari',
            'kelas' => 'TI2E',
            'jurusan' => 'Teknologi Informasi',
            'no_handphone'=>'085231404775',
            'email'=>'ayianjani774@gmail.com',
            'tanggal_lahir'=>'2002-04-08',
        ];
        \DB::table('mahasiswas')->insert($data);
        
    }
}

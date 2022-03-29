<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nim'=> $this->faker->unique()->regexify('[0-9]{10}'),
            'nama'=> $this->faker->name(),
            'kelas'=> $this->faker->regexify('[1-4]{1}[A-I]{1}'),
            'jurusan'=> $this->faker->regexify('[T]{1}[EIKM]{1}'),
            'no_handphone'=> $this->faker->phoneNumber(),
            'email'=> $this->faker->unique()->safeEmail(),
            'tanggal_lahir'=> $this->faker->date(),
            
        ];
    }
}

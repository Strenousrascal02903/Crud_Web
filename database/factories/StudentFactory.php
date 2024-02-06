<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => $this->faker->unique()->numberBetween(10000, 99999),
            'nama' => $this->faker->name(),
            'kelas_id' => $this->faker->numberBetween(1,4),
            'alamat' => $this->faker->address(),
            'tgl_lahir' => $this->faker->date(),
        ];
    }
}

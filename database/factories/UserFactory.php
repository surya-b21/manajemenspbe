<?php

namespace Database\Factories;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
=======
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
>>>>>>> 30f376fdf611342ab7289a4ad7eda6413ae2f800
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
=======
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
>>>>>>> 30f376fdf611342ab7289a4ad7eda6413ae2f800
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
<<<<<<< HEAD
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
=======
            'username' => $this->faker->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'), // password
            'alamat' => $this->faker->address(),
            'remember_token' => Str::random(10),
            'id_opd' => $this->faker->numberBetween(1,3),
>>>>>>> 30f376fdf611342ab7289a4ad7eda6413ae2f800
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

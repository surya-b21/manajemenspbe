<?php

namespace Database\Factories;

use App\Models\Forum\Topik;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopikFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topik::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 8)),
            // 'slug' => $this->faker->slug(),
            // 'excerpt' => $this->faker->paragraph(),
            // 'isi' => $this->faker->paragraph(mt_rand(5, 10)), //1 paragraph
            'isi' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(5, 10))) . '<p></p>',
            // 'isi' => collect($this->faker->paragraphs(mt_rand(5, 10)))
            //     ->map(fn ($p) => "<p>$p</p>")
            //     ->implode(''),
            'id_user' => mt_rand(1, 3),
            'id_kf' => mt_rand(1, 5),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
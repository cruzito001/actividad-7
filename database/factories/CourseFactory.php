<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_key'        => fake()->unique()->bothify('Rob###'),
            'title'             => fake()->sentence(3),
            'cover_image'       => fake()->imageUrl(640, 480, 'technics'),
            'content'           => fake()->paragraphs(3, true),
            'teaching_material' => fake()->paragraphs(2, true),
            'robotics_kit_id'   => fake()->numberBetween(1, 3),
        ];
    }
}

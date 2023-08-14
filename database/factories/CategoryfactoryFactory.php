<?php

namespace Database\Factories;

use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Category::class;

    public function definition(): array
    {
        return [
            //
            'name'=>$this->faker->sentence(6),
        ];
    }
}

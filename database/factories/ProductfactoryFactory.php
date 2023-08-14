<?php

namespace Database\Factories;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Product::class;
    public function definition(): array
    {
        return [
            //
            'name'=>$this->faker->sentence(6, true),
            'description'=> $this->faker->sentence(4, true),
            'price'=> $this->faker->randomFloat(4, 10, 100),
            'image'=> $this->faker->imageUrl(),
            'quantity'=>$this->faker->numberBetween(1,200),
            ' category_id '=> function(){
                return Category::factory()->create()->id;
            }

        ];
    }
}

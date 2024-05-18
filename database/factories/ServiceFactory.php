<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catgory;
use App\Models\Service;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *  @return array
     */
    public function definition()
    {
        // Get all categories from the database
        $Catgories = Catgory::pluck('id')->toArray();

        return [
            'category_id' => $this->faker->randomElement($Catgories),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
        ];
    }
}

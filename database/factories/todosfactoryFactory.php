<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todos>
 */
class todosfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = todos::class;
    
    public function definition()
    {
        return [
            'name'=>$this->faker->text(20),
            'name'=>$this->faker->text(20),
            'name'=>$this->faker->text(20),
            'name'=>$this->faker->text(20),
            'name'=>$this->faker->text(20),
            'name'=>$this->faker->text(20),
        ];
    }
}

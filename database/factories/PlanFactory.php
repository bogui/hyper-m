<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'permissions' => ['inv_count' => 5, 'usr_count' => 1]
        ];
    }

    /**
     * Free plan.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function free()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'free',
                'permissions' => ['inv_count' => 5, 'usr_count' => 1]
            ];
        });
    }

    /**
     * Pay As You Go plan.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function pay_as_you_go()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'pay_as_you_go',
                'permissions' => ['inv_count' => 25, 'usr_count' => 5]
            ];
        });
    }

    /**
     * Basic plan.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function basic()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'basic',
                'permissions' => ['inv_count' => 25, 'usr_count' => 5]
            ];
        });
    }
}

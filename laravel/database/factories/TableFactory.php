<?php

namespace Database\Factories;

use App\Models\Store;
use App\Models\Table;
use Illuminate\Database\Eloquent\Factories\Factory;

class TableFactory extends Factory
{
    protected $model = Table::class;

    public function definition(): array
    {
        return [
            'name' => "Table " . $this->faker->unique()->numberBetween(1, 30),
            'status' => 'active',
            'capacity' => $this->faker->numberBetween(1, 10),
            'is_reserved' => $this->faker->boolean,
            'store_id' => Store::first()->id,
        ];
    }
}

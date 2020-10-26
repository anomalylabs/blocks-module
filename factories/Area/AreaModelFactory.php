<?php

namespace Database\Factories\Anomaly\BlocksModule\Area;

use Anomaly\BlocksModule\Area\AreaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class RedirectModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AreaModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];
    }
}

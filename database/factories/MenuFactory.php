<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    protected $model=Menu::class;
    public function definition(): array
    {
        return [
            'title'=>$this->faker->word,
            'url'=>$this->faker->url,
            'is_active'=>array_rand([true,false])
        ];

    }
}

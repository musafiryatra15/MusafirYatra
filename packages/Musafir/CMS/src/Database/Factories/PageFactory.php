<?php

namespace Musafir\CMS\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Musafir\CMS\Models\Page;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'layout' => null,
        ];
    }
}

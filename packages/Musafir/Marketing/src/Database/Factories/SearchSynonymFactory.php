<?php

namespace Musafir\Marketing\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Musafir\Marketing\Models\SearchSynonym;

class SearchSynonymFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SearchSynonym::class;

    /**
     * Define the model's default state.
     */
    public function definition()
    {
        $terms = ['jackets', 'shoes', 'footwear',  'phone', 'computers', 'electronics'];

        return [
            'terms' => $terms[array_rand($terms)],
            'name'  => preg_replace('/[^a-zA-Z ]/', '', $this->faker->name()),
        ];
    }
}

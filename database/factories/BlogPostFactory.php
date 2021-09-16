<?php

namespace Database\Factories;


use App\Models\User;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Factory
            'title'=> $this->faker->sentence, //generate a fake sentence
            'body'=>$this->faker->paragraph(30),//generate fake 30 paragraph
            'user_id'=> User::factory() //generates a User from factory and extract the id
        ];
    }
}

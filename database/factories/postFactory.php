<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id=rand(30,300);
        $image="https://picsum.photos/id/$id/600/400";

        return [
            'user_id'=>1,
            'title'=> $this->faker->sentence(),
            'slug' =>Str::slug($this->faker->sentence()),
            'category' =>1,
            'description' =>$this->faker->paragraph(30),
            'images' =>$image,
            'posted_by' =>1,

        ];
    }
}

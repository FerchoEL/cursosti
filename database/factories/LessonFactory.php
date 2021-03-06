<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(),
            'url'=> 'https://youtu.be/OTRmOZjOLr4',
            'iframe'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/OTRmOZjOLr4" title="YouTube video player" frameborder="0" allowfullscreen></iframe>',
             'platform_id' =>1  
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name' => $this->faker->unique()->randomElement(['قسم الجراحة','قسم المخ و الاعصاب','قسم الاسنان','قسم الاطفال ', 'قسم الاشعة']),
            'description' => $this ->faker->paragraph
        ];
    }
}

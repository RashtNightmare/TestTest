<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Lesson::class;
    public function definition()
    {
        //'user_id','test_id','score','status','paid','canceled'
        $date_create_update = $this->faker->dateTimeBetween('-1 day');
        $TextForQuestion="Text-Question ".$this->faker->text;
        // $str="";
        // $PassOrFail=$this->faker->numberBetween(1,0);
        // if ($PassOrFail == 0){
        //   $str="Failed";
        // }else if ($PassOrFail == 1){
        //     $str="Passed";
        // }
        //`id`, `name`, `major_id`, `created_at`, `updated_at`
        return [
            'name'=>  $this->faker->name,
            'major_id'=>$this->faker->numberBetween(1,3),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update
        ];
    }
}
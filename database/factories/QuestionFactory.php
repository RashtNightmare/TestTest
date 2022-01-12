<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Question::class;
    public function definition()
    {
        //'user_id','test_id','score','status','paid','canceled'
        $date_create_update = $this->faker->dateTimeBetween('-1 day' );
        $TextForQuestion="Text-Question ".$this->faker->text;
        $name="Test".$this->faker->numberBetween(1,4);
        // $str="";
        // $PassOrFail=$this->faker->numberBetween(1,0);
        // if ($PassOrFail == 0){
        //   $str="Failed";
        // }else if ($PassOrFail == 1){
        //     $str="Passed";
        // }
        //`id`, `text`, `option1`, `option2`, `option3`, `option4`, `true_answer`, `test_id`, `created_at`, `updated_at`
        return [
            // 'name'=> $name,
            'text'=> $TextForQuestion,
            'option1'=>  $this->faker->text,
            'option2'=> $this->faker->text,
            'option3'=>  $this->faker->text,
            'option4'=> $this->faker->text, 
            'true_answer'=>$this->faker->numberBetween(1,4),
            'test_id'=>$this->faker->numberBetween(1,3),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update

        ];
    }
}

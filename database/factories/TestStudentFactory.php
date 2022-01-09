<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\TestStudent::class;
    public function definition()
    {
        //'user_id','test_id','score','status','paid','canceled'
        $date_create_update = $this->faker->dateTimeBetween('-1 day' );
        $mobile="09". $this->faker->numerify('#########');
        $user_name="User_".$this->faker->name;
        $str="";
        $PassOrFail=$this->faker->numberBetween(1,0);
        if ($PassOrFail == 0){
          $str="Failed";
        }else if ($PassOrFail == 1){
            $str="Passed";
        }
        return [
            'user_id'=> $this->faker->numberBetween(1,4),
            'test_id'=> $this->faker->numberBetween(1,4),
            'score'=> $this->faker->numberBetween(14,20),
            'status'=> $str,
            'paid'=> $this->faker->numberBetween(1,0),
            'canceled'=>$this->faker->numberBetween(1,0),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Test::class;
    public function definition()
    {
        $date_create_update = $this->faker->dateTimeBetween('-1 day' );
        $hour=$this->faker->numberBetween(1,24);
        $min=$this->faker->numberBetween(1,59);
        $years=stringValue($this->faker->numberBetween(1400,1401));
        $months=stringValue($this->faker->numberBetween(1,12));
        $days=stringValue($this->faker->numberBetween(1,30));
        $date=$years.'/'.$months.'/'.$days;
        $start_time=stringValue($hour).':'.stringValue($min);
        return [
         `student_id` => $this->faker->numberBetween(1,4),
         `teacher_id` => $this->faker->numberBetween(1,4),
         `score` => $this->faker->numberBetween(14,20),
         `acceptance_quorum` => $this->faker->numberBetween(17,20),
         `amount` => $this->faker->numberBetween(10000,100000),
         `title`=> $this->faker->text,
         `major_id` =>  $this->faker->numberBetween(1,3),
         `lesson_id` =>  $this->faker->numberBetween(1,3),
         `date` => $date,
         `duration`=>  $this->faker->numberBetween(30,150),
         `start_time`=> $start_time ,
         `created_at`=>$date_create_update ,
         `updated_at`=>$date_create_update     ];
    }
}

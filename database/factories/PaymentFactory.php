<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Payment::class;
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
        //(`reference_id`, `credit_card_number`, `amount`, `status`, `test_id`, `user_id`, `created_at`, `updated_at`
        return [
            'reference_id'=> $this->faker->numberBetween(1,4),
            'credit_card_number'=> $this->faker->numberBetween(1111111111111111,9999999999999999),
            'amount'=> $this->faker->numberBetween(10000,100000),
            'status'=> $this->faker->numberBetween(1,3),
            'test_id'=> $this->faker->numberBetween(1,3),
            'user_id'=>$this->faker->numberBetween(1,3),
            'created_at'=>$date_create_update,
            'updated_at'=>$date_create_update
        ];
    }

}

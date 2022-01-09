<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    //set our directed model which is Role in here
    protected $model = \App\Models\Role::class;

    public function definition()
    {
      /*after i run it in tinker it says name doesn't have a default value , but I just gave it a fake value ..idk 
      what's wrong with it*/
           return [
             'name' => $this->faker->name,
             'created_at' => now(),
             'updated_at' => now(),
              ];
        
    }
}

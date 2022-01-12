<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class WalletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Wallet::class;
    public function definition()
    {
        // 'test_id','user_id','type','action','description','balance'
        $date_create_update = $this->faker->dateTimeBetween('-1 day' );
        $date_delete = $this->faker->dateTimeBetween('+1 day' );
        $type="Type".((string)$this->faker->numberBetween(1,4));
        $action="Action".((string)$this->faker->numberBetween(1,4));
        $description="Description".((string)$this->faker->numberBetween(1,4));

        return [
            'test_id' => $this->faker->name,
            'user_id' => $this->faker->numberBetween(1,4),
            'type' => $type ,
            'action' =>$action,
            'description' =>  $description,
            'balance' =>$this->faker->unique()->numberBetween(4, 100),
            'created_at' => $date_create_update,
            'update_at' => $date_create_update,
            'deleted_at' => $date_delete,

        ];
    }
}

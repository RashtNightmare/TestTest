<?php

namespace Database\Seeders;

use App\Models\BuyBasket;
use Illuminate\Database\Seeder;

class BusBasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            ["Test1",1],
            ["Test2",2],
            ["Test3",3]];    
            for ($i=0;$i < count($user);$i++) {
                $j=0;
                BuyBasket::query()->create([
                    'amount'=> $user[$i][$j],
                    'status'=>$user[$i][$j],
                    'test_id'=>$user[$i][$j],
                    'user_id'=>$user[$i][$j],
                    'created_at'=>$user[$i][$j],
                    'updated_at'=>$user[$i][$j],
    
                   ]); 
                   BuyBasket::factory()->count(1)->create();

                }}}

<?php

namespace Database\Seeders;

use App\Models\BuyBasket;
use Illuminate\Database\Seeder;

class BuyBasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //        'name','major_id'
     $user=[
        ["Test1",1],
        ["Test2",2],
        ["Test3",3]];    
        for($i=0;$i < count($user);$i++){
         $j=0;
             BuyBasket::query()->create([
                 'name'=> $user[$i][$j]
                 ,'major_id'=>$user[$i][$j+1]

               ]);
        
          
     }
     BuyBasket::factory()->count(1)->create();


    }
}

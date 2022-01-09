<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'test_id','user_id','type','action','description','balance'
        $user=[
            [1,1,"type1","action1","this is the 1th description",1],
            [2,2,"type2","action2","this is the 2th description",2],
            [3,3,"type3","action3","this is the 3th description",3],];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 Wallet::query()->create([
                     'test_id'=> $user[$i][$j]
                     ,'user_id'=>$user[$i][$j+1]
                     ,'type'=>$user[$i][$j+2]
                     ,'action'=>$user[$i][$j+3]
                     ,'description'=>$user[$i][$j+4]
                     ,'balance'=>$user[$i][$j+5]

                    ]); 
         }
         Wallet::factory()->count(1)->create();
    }
}

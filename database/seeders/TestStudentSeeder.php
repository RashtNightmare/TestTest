<?php

namespace Database\Seeders;

use App\Models\TestStudent;
use Illuminate\Database\Seeder;

class TestStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'user_id','test_id','score','status','paid','canceled'
        $user=[
            [1,2,15,"failed",true,false],
            [2,2,18,"pass",true,false],
            [3,3,20,"pass",true,false]];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 TestStudent::query()->create([
                     'user_id'=> $user[$i][$j]
                     ,'test_id'=>$user[$i][$j+1]
                     ,'score'=>$user[$i][$j+2]
                     ,'status'=>$user[$i][$j+3]
                     ,'paid'=>$user[$i][$j+4]
                     ,'canceled'=>$user[$i][$j+5]
                   ]); 
         }
TestStudent::factory()->count(1)->create();

        
    }
}

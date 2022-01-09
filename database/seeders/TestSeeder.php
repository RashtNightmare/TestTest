<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'student_id','teacher_id','score','acceptance_quorum','amount','title','major_id','lesson_id','date','duration','start_time'

        $user=[
            [1,2,20,18,10000,'Test1T2',2,1,'1400/10/18','90','12:00'],
            [2,2,20,17,800000,'Test2T2',2,2,'1400/10/19','50','13:00'],
            [3,2,20,19,50000,'Test3T2',3,3,'1400/10/19','100','19:00']];
            for($i=0;$i < count($user);$i++){
                $j=0;
                 Test::query()->create([
                     'student_id'=> $user[$i][$j]
                     ,'teacher_id'=>$user[$i][$j+1]
                     ,'score'=>$user[$i][$j+2]
                     ,'acceptance_quorum'=>$user[$i][$j+3]
                     ,'amount'=>$user[$i][$j+4]
                     ,'title'=>$user[$i][$j+5]
                     ,'major_id'=>$user[$i][$j+6]
                     ,'lesson_id'=>$user[$i][$j+7]
                     ,'date'=>$user[$i][$j+8]
                     ,'duration'=>$user[$i][$j+9]
                     ,'start_time'=>$user[$i][$j+10]
                    ]); 
         }
Test::factory()->count(1)->create();

    }
}

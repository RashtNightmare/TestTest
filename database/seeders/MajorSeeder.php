<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //name
        $user=[
        "Math",
        "Science",
        "Geography"];
        for ($i=0;$i < count($user);$i++) {
            Major::query()->create([
         'name'=> $user[$i]
         ]);
        }
        Major::factory()->count(1)->create();

    }
}

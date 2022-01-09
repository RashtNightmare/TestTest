<?php

namespace Database\Seeders;

use App\Models\Balance;
use App\Models\Lesson;
use App\Models\Payment;
use App\Models\Question;
use App\Models\TestStudent;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            majorSeeder::class,
            LessonsSeeder::class,
            TestSeeder::class,
            QuestionSeeder::class,
            PaymentsSeeder::class,
            WalletSeeder::class,
            BalanceSeeder::class,
            TestStudentSeeder::class
        ]);
                // \App\Models\User::factory(10)->create();
    }
}

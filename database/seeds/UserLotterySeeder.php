<?php

use Illuminate\Database\Seeder;

class UserLotterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 1;
        for ($i = 0; $i < $limit; $i++) {
            \App\UserLottery::create([
                'lottery_id' => rand(1, 111),
                'user_id' => rand(1, 50000),
                'code' => 123,
                'created_at' => $faker->dateTimeBetween(-1, now()),
                'updated_at' => $faker->dateTimeBetween(-1, now()),
                'isCorrect' => rand(0, 1),
                'ic_number' => rand(10000, 50000),
            ]);
        }
    }
}

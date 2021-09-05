<?php

use App\Lottery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call([
//            UserLotterySeeder::class
//        ]);
        $data = [
            ['title' => '22 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '4 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '23 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '5 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '24 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '6 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '25 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '7 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '26 Okt', 'correct_value' => '8 Nov', 'button_text' => '', 'section' => '1'],
            ['title' => '8 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '27 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '9 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '28 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '10 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '29 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '11 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '30 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '12 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '31 Okt', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '13 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '1 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '14 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '2 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '15 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '3 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => '16 Nov', 'correct_value' => '123', 'button_text' => '', 'section' => '1'],
            ['title' => 'PNB', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'ASNB', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Maybank', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Sime Darby Plantation', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'UMW', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Sime Darby Berhad', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Sime Darby Property', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Setia', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'MIDF', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Perodua', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'MNRB', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Duopharma', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Velesto Energy', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Sapura Energy', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],
            ['title' => 'Prolintas', 'correct_value' => '123', 'button_text' => '', 'section' => '2'],


            ['title' => 'Sembang-Sembang ASNB', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB SALES', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'ASB-Iclif MBA MasterClass', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'Attana', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'Pedestrian Question', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB Casual Talkshow', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'Lepak Je!', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Rabu, 17 Nov 2021', 'section' => '3'],


            ['title' => 'Sembang-Sembang ASNB', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'ASNB SALES', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'ASB-Iclif MBA MasterClass', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'Attana', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'Pedestrian Question', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'ASNB Casual Talkshow', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'Lepak Je!', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Khamis, 18 nov 2021', 'section' => '3'],


            ['title' => 'Sembang-Sembang ASNB', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB SALES', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'ASB-Iclif MBA MasterClass', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'Attana', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'Pedestrian Question', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB Casual Talkshow', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'Lepak Je!', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Jumaat, 19 Nov 2021', 'section' => '3'],


            ['title' => 'Sembang-Sembang ASNB', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB SALES', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'ASB-Iclif MBA MasterClass', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'Attana', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'Pedestrian Question', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB Casual Talkshow', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'Lepak Je!', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Sabtu, 20 Nov 2021', 'section' => '3'],


            ['title' => 'Sembang-Sembang ASNB', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB SALES', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'ASB-Iclif MBA MasterClass', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'Attana', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'Pedestrian Question', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB Casual Talkshow', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'Lepak Je!', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Ahad, 21 Nov 2021', 'section' => '3'],


            ['title' => 'Sembang-Sembang ASNB', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB SALES', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'ASB-Iclif MBA MasterClass', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'Attana', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'Pedestrian Question', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB Casual Talkshow', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'Lepak Je!', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Isinin, 22 Nov 2021', 'section' => '3'],


            ['title' => 'Sembang-Sembang ASNB', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB SALES', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'ASB-Iclif MBA MasterClass', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'Attana', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'Pedestrian Question', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'ASNB Casual Talkshow', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'Lepak Je!', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],
            ['title' => 'Lets Get Quizzical', 'correct_value' => '123', 'button_text' => 'Selasa, 23 Nov 2021', 'section' => '3'],


        ];
        // $this->call(UserSeeder::class);
//        Lottery::insert($data);
//        factory(App\User::class, 50000)->create();

//        factory(App\User::class, 1)->create();
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 800000; $i++) {
            DB::table('user_lotteries')->insert([
                'lottery_id' => rand(1,111),
                'user_id' => rand(1,50000),
                'code' => 123,
                'created_at' =>  now()->addMinute(rand(1,59)),
                'updated_at' => now()->addMonth(rand(1,59)),
                'isCorrect' => rand(0,1),
                'ic_number' => rand(10000,50000),
            ]);
        }

    }
}

<?php

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class task_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $userID = DB::table('users')->pluck('id');
        // $date = Carbon::create(2019, 5, 28, 0, 0, 0);
        // $year = rand(2019, 2019);
        // $month = rand(1, 12);
        // $day = rand(1, 28);

        // $date = Carbon::create($year, $month, $day, 0, 0, 0);
        foreach (range(0, 3) as $i) {
            DB::table('tasks')->insert([
                'user_id'           => $faker->randomElement($userID),
                'rdbms'             => 'MySQL',
                'provisioning'      => $faker->numberBetween($min = 15, $max = 40),
                'troubleshooting'   => $faker->biasedNumberBetween($min = 0, $max = 5, $function = 'Faker\Provider\Biased::linearLow'),
                'created_at'        => $faker->dateTimeBetween($startDate = '2019-02-01', $endDate = '2019-02-01', $timezone = null),
            ]);
        }
        foreach (range(0, 3) as $i) {
            DB::table('tasks')->insert([
                'user_id'           => $faker->randomElement($userID),
                'rdbms'             => 'PostgreSQL',
                'provisioning'      => $faker->numberBetween($min = 15, $max = 40),
                'troubleshooting'   => $faker->biasedNumberBetween($min = 0, $max = 5, $function = 'Faker\Provider\Biased::linearLow'),
                'created_at'        => $faker->dateTimeBetween($startDate = '2019-02-01', $endDate = '2019-02-01', $timezone = null),
            ]);
        }
        foreach (range(0, 3) as $i) {
            DB::table('tasks')->insert([
                'user_id'           => $faker->randomElement($userID),
                'rdbms'             => 'Oracle',
                'provisioning'      => $faker->numberBetween($min = 15, $max = 40),
                'troubleshooting'   => $faker->biasedNumberBetween($min = 0, $max = 5, $function = 'Faker\Provider\Biased::linearLow'),
                'created_at'        => $faker->dateTimeBetween($startDate = '2019-02-01', $endDate = '2019-02-01', $timezone = null),
            ]);
        }
    }
}

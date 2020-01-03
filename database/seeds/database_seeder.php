<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class database_seeder extends Seeder
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
        $applicationID = DB::table('applications')->pluck('id');
        foreach (range(0, 9) as $i) {
            DB::table('databases')->insert([
                'user_id'           => $faker->randomElement($userID),
                'rdbms_id'          => $faker->randomElement($array = array(6, 7)),
                'application_id'    => $faker->randomElement($applicationID),
                'database_name'     => $faker->numerify('DB_##'),
                'description'       => "-",
                'created_at'        => $faker->dateTimeThisMonth(),
            ]);
        }
    }
}

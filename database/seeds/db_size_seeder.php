<?php

use App\Database;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class db_size_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $databaseID = DB::table('databases')->pluck('id');
        foreach (range(0, 3000) as $i) {
            DB::table('database_sizes')->insert([
                'database_id' => $faker->randomElement($databaseID),
                'size' => $faker->randomFloat(NULL, 100, 200),
                'created_at' => $faker->dateTimeThisMonth(),
            ]);
        }
    }
}

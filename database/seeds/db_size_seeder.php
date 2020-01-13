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
        foreach (range(0, 51) as $i) {
            DB::table('database_sizes')->insert([
                'database_id' => $faker->unique()->randomElement($databaseID),
                'size' => $faker->randomFloat(NULL, 250, 300),
                'created_at' => '2020-01-04 04:00:49',
            ]);
        }
    }
}

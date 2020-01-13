<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class oracle_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $ids = [1, 2, 3];
        $databaseID = DB::table('databases')->whereIn('id', $ids)->pluck('id');
        foreach (range(0, 300) as $i) {
            DB::table('oracle_objects')->insert([
                'database_id' => $faker->randomElement($databaseID),
                'object_name' => $faker->unique()->numerify('TBL_###'),
                'object_type' => $faker->randomElement($array = array('table')),
                'object_size' => $faker->randomFloat(NULL, 10, 100),
                'created_at' => '2020-01-04 05:00:49',
            ]);
        }
        foreach (range(0, 600) as $i) {
            DB::table('oracle_objects')->insert([
                'database_id' => $faker->randomElement($databaseID),
                'object_name' => $faker->unique()->numerify('IDX_###'),
                'object_type' => $faker->randomElement($array = array('index')),
                'object_size' => $faker->randomFloat(NULL, 500, 900),
                'created_at' => '2020-01-04 05:00:49',
            ]);
        }
        foreach (range(0, 51) as $i) {
            DB::table('oracle_objects')->insert([
                'database_id' => $faker->randomElement($databaseID),
                'object_name' => $faker->unique()->numerify('TBS_###'),
                'object_type' => $faker->randomElement($array = array('tablespace')),
                'object_size' => $faker->randomFloat(NULL, 200, 300),
                'created_at' => '2020-01-04 05:00:49',
            ]);
        }
    }
}

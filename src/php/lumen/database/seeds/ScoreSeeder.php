<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = 0;
        while ($a <= 10)
        {
            DB::table('scores')->insert([
                'name' => Str::random(10),
                'seed_key' => Carbon::now()->format('dmY'),
                'score' => random_int(0, 100)
            ]);

            $a++;
        };
    }
}

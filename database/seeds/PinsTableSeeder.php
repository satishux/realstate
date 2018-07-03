<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pin_types = [1,2,3.4,5];

        foreach($pin_types as $pin_type) {

            DB::table('pins')->insert([
                'pin_no' => rand(111111,999999),
                'pin_type_id' => $pin_type,
                'user_id' => 2,
                'claimed' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()       
            ]);
        }
    }
}

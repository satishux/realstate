<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PinTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $types = ['Free Pin', 'Plot Pin', 'Package Pin', 'Topup Pin', 'Transfer Pin'];
        
        foreach($types as $type) {

            DB::table('pin_types')->insert([
                'name' => $type,
                'description' => $faker->sentence($nbWords = 6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()      
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $states = ['UP', 'MP', 'Delhi', 'Gujrat'];
        $gender =  ['Male', 'Female'];
        $position = ['Left', 'Right'];
        $marital_status = ['Single', 'Married', 'Widow', 'Divorced'];

        $usersArray = [
            [
                'username' => 'su_admin',
                'city' => 'Allahabad',
                'state' => $states[array_rand($states, 1)],
                'role_id' => '1'
            ],
            [
                'username' => 'admin',
                'city' => 'Allahabad',
                'state' => $states[array_rand($states, 1)],
                'role_id' => '2'
            ],
            [
                'username' => 'user1',
                'city' => 'Allahabad',
                'state' => $states[array_rand($states, 1)],
                'role_id' => '3'
            ],
            [
                'username' => 'user2',
                'city' => 'Allahabad',
                'state' => $states[array_rand($states, 1)],
                'role_id' => '3'
            ]
        ];

          
        foreach($usersArray as $user) {

            DB::table('users')->insert([
                'name' => $faker->name,
                'username' => $user['username'],
                'email' => $faker->email(),
                'password' => Hash::make('123456'),
                'dob' => $faker->dateTimeBetween($startDate = '-35 years', $endDate = 'now'),
                'gender' => $gender[array_rand($gender, 1)],
                'marital_status' => $marital_status[array_rand($marital_status, 1)],
                'address' => $faker->address(),
                'state' => $user['state'],
                'city' => $user['city'],
                'contact_no' => rand(1111111111,9999999999),
                'position' => $position[array_rand($position, 1)],
                'sponsor_id' => rand(1111,9999),
                'parent_id' => rand(1111,9999),
                'role_id' => $user['role_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]);
        }
    }
}

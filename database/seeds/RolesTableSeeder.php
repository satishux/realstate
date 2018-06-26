<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'super_admin',
                'description' => 'Super Admin'
            ],
            [
                'name' => 'admin',
                'description' => 'Admin'
            ],
            [
                'name' => 'user',
                'description' => 'User'
            ]
        ];

        foreach($roles as $role) {

            DB::table('roles')->insert([
                'name' => $role['name'],
                'description' => $role['description'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Kakanda Tech',
                'email' => 'kakandatech@business.com',
                'password' => bcrypt('kakandatech'),
                'roles' => 'ADMIN'
            ],
            [
                'name' => 'Kakanda Member',
                'email' => 'kakandamember@gmail.com',
                'password' => bcrypt('kakandamember'),
                'roles' => 'USER'
            ]
        ]);
    }
}

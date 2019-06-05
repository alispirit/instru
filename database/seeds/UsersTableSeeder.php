<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'alireza',
            'lname' => 'superadmin',
            'email' => 'ali.spirit70@gmail.com',
            'type' => 0,
            'password' => bcrypt('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'samira',
            'lname' => 'admin',
            'email' => 'spiritpari@gmail.com',
            'type' => 1,
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'lname' => 'user',
            'email' => 'user@gmail.com',
            'type' => 6,
            'password' => bcrypt('1234'),
        ]);
    }
}

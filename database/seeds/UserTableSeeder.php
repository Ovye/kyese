<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Josiah Yahaya',
            'email' => 'dmcbist@gmail.com',
            'username' => 'Josiah',
            'phone' => '08131600400',
            'password' => \Illuminate\Support\Facades\Hash::make('Josiah')
        ]);
    }
}

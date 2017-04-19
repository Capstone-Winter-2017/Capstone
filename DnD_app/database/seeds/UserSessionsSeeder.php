<?php

use Illuminate\Database\Seeder;

class UserSessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {
//        SESSION ONE
            DB::table('user_sessions')->insert([
            'user_id' => '2',
            'session_id' => '1'
        ]);

        DB::table('user_sessions')->insert([
            'user_id' => '3',
            'session_id' => '1'
        ]);

        DB::table('user_sessions')->insert([
            'user_id' => '4',
            'session_id' => '1'
        ]);

        DB::table('user_sessions')->insert([
            'user_id' => '5',
            'session_id' => '1'
        ]);

//        SESSION TWO
        DB::table('user_sessions')->insert([
            'user_id' => '1',
            'session_id' => '2'
        ]);

        DB::table('user_sessions')->insert([
            'user_id' => '3',
            'session_id' => '2'
        ]);

        DB::table('user_sessions')->insert([
            'user_id' => '4',
            'session_id' => '2'
        ]);

        DB::table('user_sessions')->insert([
            'user_id' => '5',
            'session_id' => '2'
        ]);
    }
}

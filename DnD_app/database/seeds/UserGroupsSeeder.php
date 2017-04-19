<?php

use Illuminate\Database\Seeder;

class UserGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {
//        SESSION ONE
        DB::table('user_groups')->insert([
            'user_id' => '1',
            'group_id' => '1'
        ]);

        DB::table('user_groups')->insert([
            'user_id' => '2',
            'group_id' => '1'
        ]);

        DB::table('user_groups')->insert([
            'user_id' => '3',
            'group_id' => '1'
        ]);

        DB::table('user_groups')->insert([
            'user_id' => '4',
            'group_id' => '1'
        ]);

        DB::table('user_groups')->insert([
            'user_id' => '5',
            'group_id' => '1'
        ]);

//        SESSION TWO
        DB::table('user_groups')->insert([
            'user_id' => '1',
            'group_id' => '2'
        ]);

        DB::table('user_groups')->insert([
            'user_id' => '2',
            'group_id' => '2'
        ]);

        DB::table('user_groups')->insert([
            'user_id' => '3',
            'group_id' => '2'
        ]);

        DB::table('user_groups')->insert([
            'user_id' => '4',
            'group_id' => '2'
        ]);

        DB::table('user_groups')->insert([
            'user_id' => '5',
            'group_id' => '2'
        ]);
    }
}

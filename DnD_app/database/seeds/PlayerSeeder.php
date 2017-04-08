<?php

use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {

        DB::table('players')->insert([
            'user_name' => 'FirstPlayer',
            'first_name' => 'Tim',
            'last_name' => 'Mooney',
            'email' => 'tpmooney@gmail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('players')->insert([
            'user_name' => 'SecondPlayer',
            'first_name' => 'Calum',
            'last_name' => 'MacDonald',
            'email' => 'Calum@macdonald.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('players')->insert([
            'user_name' => 'ThirdPlayer',
            'first_name' => 'Joel',
            'last_name' => 'MacCleod',
            'email' => 'Joel@maccleod.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('players')->insert([
            'user_name' => 'FourthPlayer',
            'first_name' => 'Donnie',
            'last_name' => 'Hancock',
            'email' => 'Donnie@hancock.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('players')->insert([
            'user_name' => 'FifthPlayer',
            'first_name' => 'Elvis',
            'last_name' => 'Presley',
            'email' => 'elvis@theking.com',
            'password' => bcrypt('password'),
        ]);

    //    $table->string('user_name')->unique();
      //  $table->string('first_name');
      //  $table->string('last_name');
       // $table->string('email');
       // $table->string('phone');

    }
}
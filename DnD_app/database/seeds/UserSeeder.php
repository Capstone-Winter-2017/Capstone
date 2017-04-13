<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Tim Mooney',
            'email' => 'tpmooney@gmail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Calum MacDonald',
            'email' => 'Calum@macdonald.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Joel MacLeod',
            'email' => 'Joel@macleod.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Donnie Hancock',
            'email' => 'Donnie@hancock.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Elvis Presley',
            'email' => 'elvis@theking.com',
            'password' => bcrypt('Uhhuh'),
        ]);

    //    $table->string('user_name')->unique();
      //  $table->string('first_name');
      //  $table->string('last_name');
       // $table->string('email');
       // $table->string('phone');

    }
}
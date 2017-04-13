<?php

use Illuminate\Database\Seeder;

class FriendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {

        DB::table('friends')->insert([
            'user_id' => '1',
            'friend_id' => '2',
        ]);

        DB::table('friends')->insert([
            'user_id' => '1',
            'friend_id' => '3',
        ]);

        DB::table('friends')->insert([
            'user_id' => '1',
            'friend_id' => '4',
        ]);

        DB::table('friends')->insert([
            'user_id' => '1',
            'friend_id' => '5',
        ]);

        DB::table('friends')->insert([
            'user_id' => '2',
            'friend_id' => '1',
        ]);

        DB::table('friends')->insert([
            'user_id' => '2',
            'friend_id' => '3',
        ]);

        DB::table('friends')->insert([
            'user_id' => '2',
            'friend_id' => '5',
        ]);

        DB::table('friends')->insert([
            'user_id' => '3',
            'friend_id' => '1',
        ]);

        DB::table('friends')->insert([
            'user_id' => '3',
            'friend_id' => '2',
        ]);

        DB::table('friends')->insert([
            'user_id' => '3',
            'friend_id' => '5',
        ]);

        DB::table('friends')->insert([
            'user_id' => '4',
            'friend_id' => '1',
        ]);

        DB::table('friends')->insert([
            'user_id' => '5',
            'friend_id' => '1',
        ]);

        DB::table('friends')->insert([
            'user_id' => '5',
            'friend_id' => '2',
        ]);
    }
}
/* Schema::create('player_friends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id');
            $table->integer('friend_id');
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('player_id')->references('id')->on('players');
        }); */
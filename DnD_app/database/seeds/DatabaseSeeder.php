<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'user000',
            'email' => 'user000@test.com',
            'password' => 'password'
        ]);

    /*    DB::table('characer')->insert([
            'campaign' => 'campaign000',
            'level' => '1',
            'race' => '1',
            'class' => '1',
            'background' => 'background000',
            'alignment' => '1',
            'experience' => '1',
            'faction' => 'faction000',
            'strength' => 'strength000',
            'dexterity' => 'dexterity000',
            'constitution' => 'constitution000',
            'intelligence' => 'intelligence000',
            'wisdom' => 'wisdom000',
            'charisma' => 'charisma000',
            'playerId' => 'playerId000',
            'armor_class' => 'armor_class000',
            'speed' => 'speed000',
            'personality_traits' => 'personality_traits000',
            'ideals' => 'ideals000',
            'bonds' => 'bonds000',
            'flaws' => 'flaws000',
            'features' => 'features000'
        ]); */


    }
}

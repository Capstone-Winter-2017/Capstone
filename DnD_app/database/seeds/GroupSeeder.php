<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {

        DB::table('groups')->insert([
            'name' => 'Group 1',
            'description' => 'First group, with players 1, 2, 3, 4, 5',
        ]);

        DB::table('groups')->insert([
            'name' => 'Group 2',
            'description' => 'Second group, with players 1, 2, 3, 4, 5',
        ]);

    }
}
/* Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        }); */
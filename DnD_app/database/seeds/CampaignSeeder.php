<?php

use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {

        DB::table('campaigns')->insert([
            'name' => 'Campaign 1',
            'description' => 'First Campaign, with players 1, 2, 3, 4, 5',
        ]);

        DB::table('campaigns')->insert([
            'name' => 'Campaign 2',
            'description' => 'Second Campaign, with players 1, 2, 3, 5',
        ]);

        DB::table('campaigns')->insert([
            'name' => 'Campaign 3',
            'description' => 'Third Campaign, with players 1 and 2',
        ]);
    }
}
/* Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps(); */
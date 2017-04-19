<?php

use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {

        //first campaign
        DB::table('sessions')->insert([
            'name' => 'Campaign 1, Seassion 1',
            'dateTime' => '01/01/17',
            'description' => 'First session, First campaign',
            'summary' => 'All Players',
            'campaign_id' => '1',
            'created_by' => '1'

        ]);

        DB::table('sessions')->insert([
            'name' => 'Campaign 1, Seassion 2',
            'dateTime' => '02/01/17',
            'description' => 'Second session, First campaign',
            'summary' => 'All Players except 3',
            'campaign_id' => '1',
            'created_by' => '2'

        ]);

        DB::table('sessions')->insert([
            'name' => 'Campaign 1, Seassion 3',
            'dateTime' => '03/01/17',
            'description' => 'Third session, First campaign',
            'summary' => 'Only Players 2, 3, 4',
            'campaign_id' => '1',
            'created_by' => '3'
        ]);

        //second campaign
        DB::table('sessions')->insert([
            'name' => 'Campaign 2, Seassion 1',
            'dateTime' => '02/02/17',
            'description' => 'First session, Second campaign',
            'summary' => 'All Players',
            'campaign_id' => '2',
            'created_by' => '1'
        ]);

        DB::table('sessions')->insert([
            'name' => 'Campaign 2, Seassion 2',
            'dateTime' => '03/02/17',
            'description' => 'Second session, Second campaign',
            'summary' => 'All Players but 1',
            'campaign_id' => '2',
            'created_by' => '2'
        ]);

        DB::table('sessions')->insert([
            'name' => 'Campaign 2, Seassion 3',
            'dateTime' => '04/02/17',
            'description' => 'Third session, Second campaign',
            'summary' => 'Players 1 and 3',
            'campaign_id' => '2',
            'created_by' => '3'
        ]);


        //third campaign
        DB::table('sessions')->insert([
            'name' => 'Campaign 3, Seassion 1',
            'dateTime' => '03/03/17',
            'description' => 'First session, Third campaign',
            'summary' => 'Player 1 and 2',
            'campaign_id' => '3'
        ]);

        DB::table('sessions')->insert([
            'name' => 'Campaign 3, Seassion 2',
            'dateTime' => '04/03/17',
            'description' => 'Second session, Third campaign',
            'summary' => 'Player 1 and 2',
            'campaign_id' => '3'
        ]);

        DB::table('sessions')->insert([
            'name' => 'Campaign 3, Seassion 3',
            'dateTime' => '03/03/17',
            'description' => 'Third session, Third campaign',
            'summary' => 'Player 2',
            'campaign_id' => '3'
        ]);
    }
}
/* Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('datetime');
            $table->string('description');
            $table->string('summary');
            $table->integer('campaign_id');
            $table->timestamps();

            $table->foreign('campaign_id')->references('id')->on('campaigns');
        }); */
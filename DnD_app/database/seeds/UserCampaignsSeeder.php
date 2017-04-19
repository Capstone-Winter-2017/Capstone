<?php

use Illuminate\Database\Seeder;

class UserCampaignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        CAMPAIGN ONE
        DB::table('user_campaigns')->insert([
            'user_id' => '1',
            'campaign_id' => '1'
        ]);

        DB::table('user_campaigns')->insert([
            'user_id' => '3',
            'campaign_id' => '1'
        ]);

        DB::table('user_campaigns')->insert([
            'user_id' => '4',
            'campaign_id' => '1'
        ]);

        DB::table('user_campaigns')->insert([
            'user_id' => '5',
            'campaign_id' => '1'
        ]);

//        CAMPAIGN TWO

        DB::table('user_campaigns')->insert([
            'user_id' => '2',
            'campaign_id' => '2'
        ]);

        DB::table('user_campaigns')->insert([
            'user_id' => '3',
            'campaign_id' => '2'
        ]);

        DB::table('user_campaigns')->insert([
            'user_id' => '4',
            'campaign_id' => '2'
        ]);

        DB::table('user_campaigns')->insert([
            'user_id' => '5',
            'campaign_id' => '2'
        ]);
    }
}

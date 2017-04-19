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
        $this->call(UserSeeder::class);
        $this->call(CharacterSeeder::class);
        $this->call(FriendsSeeder::class);
        $this->call(CampaignSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(UserCampaignsSeeder::class);
        $this->call(UserGroupsSeeder::class);
        $this->call(UserSessionsSeeder::class);
    }

}



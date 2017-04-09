<?php

use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {

        DB::table('players')->insert([
            'campaign' => '1',
            'name' => 'Fight McFighter',
            'level' => '1',
            'race' => 'Human',
            'Class' => 'Fighter',
            'background' => 'filler',
            'alignment' => 'Neutral',
            'experience' => '0',
            'faction' => 'The Cap Stones',
            'strength' => '12',
            'dexterity' => '12',
            'constitution' => '12',
            'intelligence' => '12',
            'wisdom' => '12',
            'charisma' => '12',
            'playerID' => '1',
            'armor_class' => '15',
            'speed' => '30',
            'personality_traits' => 'loves dogs',
            'ideals' => 'fiilllllerrr',
            'bonds' => 'filler!',
            'flaws' => 'more filler',
            'features' => 'not bugs',
            'playerID' => '1',


        ]);

        DB::table('players')->insert([
            'campaign' => '1',
            'name' => 'Rogue McStealer',
            'level' => '1',
            'race' => 'Halfling',
            'Class' => 'Fighter',
            'background' => 'filler',
            'alignment' => 'Neutral',
            'experience' => '0',
            'faction' => 'The Cap Stones',
            'strength' => '12',
            'dexterity' => '12',
            'constitution' => '12',
            'intelligence' => '12',
            'wisdom' => '12',
            'charisma' => '12',
            'playerID' => '1',
            'armor_class' => '15',
            'speed' => '30',
            'personality_traits' => 'loves dogs',
            'ideals' => 'fiilllllerrr',
            'bonds' => 'filler!',
            'flaws' => 'more filler',
            'features' => 'not bugs',
            'playerID' => '2',
        ]);

        DB::table('players')->insert([
            'campaign' => '1',
            'name' => 'Monk McPuncher',
            'level' => '1',
            'race' => 'Half-orc',
            'Class' => 'Monk',
            'background' => 'filler',
            'alignment' => 'Neutral',
            'experience' => '0',
            'faction' => 'The Cap Stones',
            'strength' => '12',
            'dexterity' => '12',
            'constitution' => '12',
            'intelligence' => '12',
            'wisdom' => '12',
            'charisma' => '12',
            'playerID' => '1',
            'armor_class' => '15',
            'speed' => '30',
            'personality_traits' => 'loves dogs',
            'ideals' => 'fiilllllerrr',
            'bonds' => 'filler!',
            'flaws' => 'more filler',
            'features' => 'not bugs',
            'playerID' => '3',
        ]);


        DB::table('players')->insert([
            'campaign' => '1',
            'name' => 'Bard McSinger',
            'level' => '1',
            'race' => 'Aasimar',
            'Class' => 'Bard',
            'background' => 'filler',
            'alignment' => 'Neutral',
            'experience' => '0',
            'faction' => 'The Cap Stones',
            'strength' => '12',
            'dexterity' => '12',
            'constitution' => '12',
            'intelligence' => '12',
            'wisdom' => '12',
            'charisma' => '12',
            'playerID' => '1',
            'armor_class' => '15',
            'speed' => '30',
            'personality_traits' => 'loves dogs',
            'ideals' => 'fiilllllerrr',
            'bonds' => 'filler!',
            'flaws' => 'more filler',
            'features' => 'not bugs',
            'playerID' => '4',
        ]);

        DB::table('players')->insert([
            'campaign' => '1',
            'name' => 'Bear McDruid',
            'level' => '1',
            'race' => 'Elf',
            'Class' => 'Druid',
            'background' => 'filler',
            'alignment' => 'Neutral',
            'experience' => '0',
            'faction' => 'The Cap Stones',
            'strength' => '12',
            'dexterity' => '12',
            'constitution' => '12',
            'intelligence' => '12',
            'wisdom' => '12',
            'charisma' => '12',
            'playerID' => '1',
            'armor_class' => '15',
            'speed' => '30',
            'personality_traits' => 'loves dogs',
            'ideals' => 'fiilllllerrr',
            'bonds' => 'filler!',
            'flaws' => 'more filler',
            'features' => 'not bugs',
            'playerID' => '5',
        ]);

        DB::table('players')->insert([
            'campaign' => '1',
            'name' => 'Spells McWizard',
            'level' => '1',
            'race' => 'Tiefling',
            'Class' => 'Wizard',
            'background' => 'filler',
            'alignment' => 'Neutral',
            'experience' => '0',
            'faction' => 'The Cap Stones',
            'strength' => '12',
            'dexterity' => '12',
            'constitution' => '12',
            'intelligence' => '12',
            'wisdom' => '12',
            'charisma' => '12',
            'playerID' => '1',
            'armor_class' => '15',
            'speed' => '30',
            'personality_traits' => 'loves dogs',
            'ideals' => 'fiilllllerrr',
            'bonds' => 'filler!',
            'flaws' => 'more filler',
            'features' => 'not bugs',
            'playerID' => '1',
        ]);

        DB::table('players')->insert([
            'campaign' => '1',
            'name' => 'Prayer McCleric',
            'level' => '1',
            'race' => 'Half-Elf',
            'Class' => 'Cleric',
            'background' => 'filler',
            'alignment' => 'Neutral',
            'experience' => '0',
            'faction' => 'The Cap Stones',
            'strength' => '12',
            'dexterity' => '12',
            'constitution' => '12',
            'intelligence' => '12',
            'wisdom' => '12',
            'charisma' => '12',
            'playerID' => '1',
            'armor_class' => '15',
            'speed' => '30',
            'personality_traits' => 'loves dogs',
            'ideals' => 'fiilllllerrr',
            'bonds' => 'filler!',
            'flaws' => 'more filler',
            'features' => 'not bugs',
            'playerID' => '2',
        ]);
/*      $table->integer('armor_class');
      $table->integer('speed');
      $table->text('personality_traits');
      $table->text('ideals');
      $table->text('bonds');
      $table->text('flaws');
      $table->text('features');

      $table->foreign('playerID')->references('id')->on('player');
      $table->timestamps();
  });  */

    }
}

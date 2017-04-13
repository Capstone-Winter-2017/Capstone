<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campaign');
            $table->string('name');
            $table->integer('level');
            $table->string('race');
            $table->string('class');
            $table->string('background');
            $table->string('alignment');
            $table->integer('experience')->default(0);
            $table->string('faction');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('constitution');
            $table->integer('intelligence');
            $table->integer('wisdom');
            $table->integer('charisma');
            $table->integer('user_id');
            $table->integer('armor_class');
            $table->integer('speed');
            $table->text('personality_traits');
            $table->text('ideals');
            $table->text('bonds');
            $table->text('flaws');
            $table->text('features');

            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

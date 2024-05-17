<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_id');
            $table->string('game_name');
            $table->string('date');
            $table->string('time');
            $table->string('venue_id');
            $table->string('team1_id');
            $table->string('team2_id');
            $table->string('referee_id');
            $table->string('game_status');
            $table->string('result');
            $table->string('winner_id');
            $table->string('notes');
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
        Schema::dropIfExists('games');
    }
};

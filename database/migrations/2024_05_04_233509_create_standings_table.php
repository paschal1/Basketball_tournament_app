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
        Schema::create('standings', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_id');
            $table->string('team_id');
            $table->string('team_name');
            $table->string('number_game_played');
            $table->string('wins');
            $table->string('losses');
            $table->string('point_against');
            $table->string('point_differential');
            $table->string('points');
            $table->string('rank');
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
        Schema::dropIfExists('standings');
    }
};

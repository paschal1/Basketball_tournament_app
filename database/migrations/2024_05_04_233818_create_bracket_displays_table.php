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
        Schema::create('bracket_displays', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('tournament_id');
            $table->string('round');
            $table->string('mackup_id');
            $table->string('winner_id');
            $table->string('team1_id');
            $table->string('team2_id');
            $table->string('team1_name');
            $table->string('team2_name');
            $table->string('team1_score');
            $table->string('team2_score');
            $table->string('venue');
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
        Schema::dropIfExists('bracket_displays');
    }
};

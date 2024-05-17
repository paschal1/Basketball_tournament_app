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
        Schema::create('live_scores', function (Blueprint $table) {
            $table->id();
            $table->string('game id');
            $table->string('tournamet_id');
            $table->string('team1_id');
            $table->string('team2_id');
            $table->string('team1_score');
            $table->string('team2_score');
            $table->string('period');
            $table->string('venue');
            $table->string('status');
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
        Schema::dropIfExists('live_scores');
    }
};

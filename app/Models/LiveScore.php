<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveScore extends Model
{
    use HasFactory;
    protected $table = "live_scores";
    protected $fillable = [
        "game_id",
        "tournament_id",
        "team1_id",
        "team2_id",
        "team1_score",
        "team2_score",
        "period",
        "venue",
        "status",
    ];
}

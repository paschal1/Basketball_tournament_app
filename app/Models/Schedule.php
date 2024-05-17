<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = "schedules";
    protected $fillable = [
        "game_id",
        "date",
        "time",
        "venue",
        "team1",
        "team2",
        "game_status",
        "reaults",
        "referees",
        "note",
    ];
}

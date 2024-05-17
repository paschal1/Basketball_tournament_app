<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = "games";
    protected $fillable = [
        "tournament_id", "game_name", "date", "time", "file",  "game_status",  "notes",
        ];
}

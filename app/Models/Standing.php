<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;
    protected $table = 'standings';
    protected $fillable = [
        'tournament_id',
        'team_id',
        'team_name',
        'number_game_played',
        'wins', 'losses',
        'point_against',
        'point_differential',
        'points',
        'rank',
        'notes',
    ];
}

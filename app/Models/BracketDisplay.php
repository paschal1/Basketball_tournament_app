<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BracketDisplay extends Model
{
    use HasFactory;
    protected $table = 'bracket_displays';
    protected $filliable = [
        'tournament_id', 'round',
        'winner_id',
        'team1_id', 'team2_id',
        'team1_score', 'team2_score',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $table = 'tournaments';
    protected $fillable = [
        'name', 'start_date', 'end_date', 'location', 'organizer', 'description', 'status', 'registration_deadline', 'max_teams', 'min_players_per_team', 'max_playersp_er_team', 'rules', 'prizes', 'notes',
    ];
}

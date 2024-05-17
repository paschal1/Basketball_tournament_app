<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = "tickets";
    protected $fillable = [
        'tournament_id',
        'game_id',
        'ticket_type',
        'price',
        'start_date',
        'end_date',
        'status'
    ];
}

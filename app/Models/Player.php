<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = "players";
    protected $fillable = [
        'team_id',
        'fname',
        'lname',
        'dname',
        'email',
        'password',
        'city',
        'age',
        'phone',
        'state',
        'zip',
        'level',
    ];
    public function team()

    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }
}

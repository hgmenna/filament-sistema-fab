<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TournamentRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_id',
        'tournament_slot_id',
        'player_id',
        'status',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function slot()
    {
        return $this->belongsTo(TournamentSlot::class, 'tournament_slot_id');
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

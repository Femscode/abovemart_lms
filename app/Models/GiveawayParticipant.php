<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiveawayParticipant extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'giveaway_participants';
}

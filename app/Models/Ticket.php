<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'movie_id', 'user_id'];

    public function movie() {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function orderTicket() {
        return $this->hasMany(OrderTicket::class, 'ticket_id');
    }

    public function room() {
        return $this->belongsTo(Room::class, 'room_id');
    }
}

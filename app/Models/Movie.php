<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duration', 'director', 'country_id', 'subtitle_id', 'img_path', 'year'];

    public function ticket() {
        return $this->hasOne(Ticket::class);
    }

    public function subtitle() {
        return $this->belongsTo(Subtitle::class, 'subtitle_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['film_id', 'user_id', 'quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}

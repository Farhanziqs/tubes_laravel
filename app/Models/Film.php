<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duration', 'genre', 'image',];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}

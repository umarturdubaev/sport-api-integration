<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['*'];
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
}
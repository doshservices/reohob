<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public function bookings()
    {
        return $this->hasMany('\App\Models\Bookings');
    }

    public function quotes()
    {
        return $this->hasMany('\App\Models\Quotes');
    }
}

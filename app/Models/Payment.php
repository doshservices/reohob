<?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    use HasFactory;


    function training()
    {
        return $this->belongsTo('\App\Models\Trainings');
    }
}

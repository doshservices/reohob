<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->hasOne('\App\Models\Payment');
    }

}

<?php

// namespace App;
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    function user()
    {
        return $this->belongsTo('\App\User');
    }

    function order()
    {
        return $this->belongsTo('\App\Order');
    }
}

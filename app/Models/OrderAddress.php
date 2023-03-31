<?php

// namespace App;
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
    

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
    public function logistic()
    {
        return $this->belongsTo('App\Models\Logistic');
    }
}

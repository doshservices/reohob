<?php

// namespace App;
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

    // public function product_variant()
    // {
    //     return $this->belongsTo('App\Models\ProductVariant');
    // }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor');
    }

    public function logistic()
    {
        return $this->belongsTo('App\Models\Logistic');
    }

    public function delivery() {

        return $this->belongsTo('App\Models\Delivery');
    }
}

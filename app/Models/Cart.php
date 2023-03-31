<?php

// namespace App;
namespace App\Models\Models;


use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = [
        'user_id', 'product_id', 'price', 'isGuest', 'cookie_id','vendor_id',
    ];

    public function user() { 
        return $this->belongsTo('App\Models\User');
    }

    // public function variant()
    // {
    //     return $this->belongsTo('App\Models\ProductVariant');
    // }

    public function order() 
    {
        return $this->where(['id', $this->id])->hasMany('App\Models\Order');
    }

    // public function item()
    // {
    //     return \App\Models\ProductVariant::find($this->product_variant_id);
    // }

    // public function item_name()
    // {
    //     return \App\Models\ProductVariant::find($this->product_variant_id);
    // }

    public function subTotal()
    {
        return ($this->quantity * $this->price);
    }

    function grandTotal()
    {
        return $this->sum(\DB::raw('quantity * price'));
    }

    function totalQuantity()
    {
        return $this->sum('quantity');
    }
}

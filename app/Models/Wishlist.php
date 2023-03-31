<?php

// namespace App;
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    protected $fillable = [
        'user_id', 'product_id', 'price', 'isGuest'
    ];
    public function user() {
        
        return $this->belongsTo('App\Models\User');
    }

    // public function item()
    // {
    //     return \App\Models\ProductVariant::find($this->product_variant_id);
    // }
}

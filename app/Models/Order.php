<?php

// namespace App;
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ["product_id", "quantity", "payment_method_id", "user_id", "total", "paid", "shipped", "processed", "returned", "order_tracking"];

    public function user() {

        return $this->belongsTo('App\Models\User');
    }

    public function getSubTotalAttribute()
    {
        $details = $this->details;
        $total = 0;
        foreach($details as $detail)
        {
            $total += ($detail->price * $detail->quantity);
        }
        return $total;
    }

    public function getProductsAttribute()
    {
        return \App\Models\Order::query()
        ->select(['products.*'])
        ->join('order_details', 'order_details.order_id', '=','orders.id')
        ->join('product_variants', 'order_details.product_variant_id', '=','product_variants.id')
        ->join('products', 'products.id', '=','product_variants.product_id')
        ->where('orders.id', '=', $this->id)
        ->get();
    }

    public function details()
    {
        return $this->hasMany(\App\Models\OrderDetail::class);
    }

    public function address()
    {
        return $this->hasOne(\App\Models\OrderAddress::class);
    }

    // public function delivery()
    // {
    //     return $this->hasOne(\App\Models\Delivery::class);
    // }

    // public function getProductVariantsAttribute()
    // {
    //     return \App\Models\ProductVariant::query()
    //     ->select('product_variants.*')
    //     ->join('order_details', 'order_details.product_variant_id', '=', 'product_variants.id')
    //     ->join('orders', 'orders.id', '=', 'order_details.order_id')
    //     ->where('orders.id', '=', $this->id)
    //     ->get();
    // }

    // public function vendors()
    // {
    //     return $this->belongsToMany(Vendor::class);
    // }

    public function transaction()
    {
        return $this->hasOne(\App\Models\Transaction::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(\App\Models\PaymentMethod::class);
    }

    public function getChargesAttribute()
    {
        $order_details = $this->details;
        $order_charges = array();
        if($order_details)
        {
            $i = 0;
            $standard_order_charges = \App\Models\StandardOrderCharge::where('active', '=', true)->get();
            foreach($standard_order_charges as $charge)
            {
                $order_charges[$i]['order_id'] = $this->id;
                $order_charges[$i]['standard_order_charge_id'] = $charge->id;
                $order_charges[$i]['amount'] = $charge->amount;
                $order_charges[$i]['total'] = $charge->total;
                $order_charges[$i]['rate'] = $charge->rate;
                $order_charges[$i]['cap'] = $charge->cap;
                $order_charges[$i]['is_fixed'] = $charge->is_fixed;
                $order_charges[$i]['has_cap'] = $charge->has_cap;
                if($charge->is_fixed)
                {
                    $order_charges[$i]['total'] = $charge->amount;
                }
                else{
                    $total = 0;
                    foreach($order_details as $detail)
                    {
                        $total += $charge->rate * ($detail->quantity * $detail->price);
                    }
                    if($charge->has_cap)
                    {
                        if($total > $charge->amount)
                        {
                            $order_charges[$i]['total'] = $charge->amount;
                        }
                        else{
                            $order_charges[$i]['total'] = $total;
                        }
                    }
                    else{
                        $order_charges[$i]['total'] = $total;
                    }
                }
                $i++;
            }
        }
        return $order_charges;
    }

    public function getTotalChargesAttribute()
    {
        $order_charges = $this->charges;
        $total = 0;
        foreach($order_charges as $charge)
        {
            $total += $charge['total'];
        }
        return $total;
    }

    public function items()
    {
        return $this->hasManyThrough(\App\Models\Item::class, \App\Models\OrderItem::class, 'order_id', 'id');
    }

    // public function order_charges()
    // {
    //     return $this->hasMany(\App\Models\OrderCharge::class, 'order_id');
    // }

    public function delivery_address()
    {
        return $this->belongsTo(\App\Models\DeliveryAddress::class, 'order_id');
    }


    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(\App\Models\OrderDetail::class);
    }

    // public function product_variants()
    // {
    //     return $this->hasMany(\App\Models\ProductVariant::class);
    // }


    // public function logistics()
    // {
    //     return $this->belongsToMany(Logistic::class);
    // }
}

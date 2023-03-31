<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use willvincent\Rateable\Rateable;

class Product extends Model
{
    //
    // use Rateable;
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'brand_id', 'category_id', 'sku', 'available', 'vendor_id', 'vat'];

    public function activate($available = true)
    {
        $this->update(['available' => $available]);
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function deActivate()
    {
        $this->activate(false);
    }

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }

    public function variants()
    {
        return $this->hasMany('App\ProductVariant');
    }

    public function count_variants()
    {
        return count($this->variants);
        
    }

    public function orderDetail()
    {
    	return $this->hasMany('App\OrderDetail');
    }
    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function images()
    {
        return $this->belongsToMany(ProductImage::class);
    }

    public function max_variant_price()
    {
        return ProductVariant::where(['product_id'=> $this->id])->max('price');
    }
    public function min_variant_price()
    {
        return ProductVariant::where('product_id', $this->id)->min('price');
    }

    public function items()
    {
        return $this->hasManyThrough('App\Item', 'App\ProductVariant');
    }
    
    public function count_items()
    {
        return count($this->items);       
    }

    public function available_items() {

        $items = $this->items;
        $quantity = 0;
        foreach($items as $item)
        {
            if ($item->available == 1) {
                $quantity++;
            }
        }
        return $quantity;
    }

    public function stock_worth()
    {
        $variants = $this->variants;
        $worth = 0;
        foreach($variants as $variant)
        {
            $price = $variant->price;
            $quantity = \App\Item::where('product_variant_id', $variant->id)->count();
            $worth += $price * $quantity;
        }
        return $worth;
    }
    public function views()
    {
        return $this->hasMany('App\ProductView');
    }

}
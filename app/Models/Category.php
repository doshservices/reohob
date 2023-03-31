<?php

// namespace App;
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable= ['name', 'description', 'image', 'parent_category_id', 'banner' ];
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function name()
    {
        return $this->name;
    }
}

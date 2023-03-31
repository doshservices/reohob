<?php

// namespace App;
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name'];
    public function name()
    {
        return $this->name;
    }

}

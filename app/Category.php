<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;

class Category extends Model
{
    protected $fillable = [
        'name', 'photo'
    ];

     public function subcategories($value='') 
    {
        return $this->hasMany('App\Category');
    }
}

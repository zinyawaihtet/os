<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'codeno','name', 'price','photo','discount','description','brand_id','subcategory_id'
    ];
}

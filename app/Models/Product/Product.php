<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product\ProductFamily;
use App\Models\Product\ProductBrand;
use App\Models\Product\ProductUnit;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'code', 
        'name', 
        'comment',
        'image',
        'packet_name',
        'packet_convert',
    ];

}

<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product\ProductPackage;
use App\Models\Product\Product;


class ProductActive extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'product_id', 
        'package_id', 
        'amount',
        'text',
        'active_erp',
        'active_web',
        'active_api',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function package()
    {
        return $this->belongsTo(ProductPackage::class, 'package_id', 'id');
    }

}

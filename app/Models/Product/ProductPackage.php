<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product\ProductUnit;

class ProductPackage extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'name', 
        'unit_id', 
        'convert', 
        'weight',
        'size_x',
        'size_y',
        'size_z',
        'pallet',
    ];

    public function unit()
    {
        return $this->belongsTo(ProductUnit::class, 'unit_id', 'id');
    }

}

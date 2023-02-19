<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPenden extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'date', 
        'client', 
        'product', 
        'comment',
        'status',   
    ];
}

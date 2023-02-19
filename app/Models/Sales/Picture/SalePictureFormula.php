<?php

namespace App\Models\Sales\Picture;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalePictureFormula extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $connection = 'mysql';
    protected $fillable = [ 
        'brand', 
        'formula', 
        'product',
        'document',
        'client_name',
        'client_mail',
        'client_phone',
        'comment'
    ];
}

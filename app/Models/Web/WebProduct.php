<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebProduct extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'code', 
        'name',
        'family', 
        'comment',
        'image',
        'price',
        'offer',
    ];
}

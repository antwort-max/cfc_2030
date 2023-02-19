<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAmbiance extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'name', 
        'image',
        'comment', 
        'status',
    ];
}

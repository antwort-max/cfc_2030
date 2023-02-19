<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebMenu extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'menu', 
        'favicon',
        'name', 
        'route',
        'can', 
    ];
}

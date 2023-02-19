<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommercialArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "commercial_areas";

    protected $fillable = [ 
        'name', 
        'comment', 
        'image', 
    ];

}

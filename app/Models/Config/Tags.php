<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = "tags";

    protected $fillable = [ 
        'name', 
        'slug', 
        'comment',
        'color',
    ];


}

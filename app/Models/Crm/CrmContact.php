<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrmContact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'name', 
        'email', 
        'phone',
        'comment', 
        'status',  
    ];
    
}

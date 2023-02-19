<?php

namespace App\Models\Control;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceLost extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'number', 
        'type', 
        'date',
        'client', 
        'seller',
        'local',
        'comment', 
        'status',   
    ];

}

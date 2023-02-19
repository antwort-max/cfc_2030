<?php

namespace App\Models\Sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleContest extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $fillable = [ 
        'name', 
        'email', 
        'dni',
        'phone',
        'document',
        'contest',
    ];
}

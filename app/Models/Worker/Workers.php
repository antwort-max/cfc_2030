<?php

namespace App\Models\Worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'name', 
        'dni', 
        'phone', 
        'email', 
        'comment', 
        'image', 
        'address', 
        'birth', 
        'start', ];
}

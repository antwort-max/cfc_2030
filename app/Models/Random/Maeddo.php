<?php

namespace App\Models\Random;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maeddo extends Model
{
    use HasFactory;

    protected $connection = 'random';
    protected $table = 'MAEDDO';
    protected $primaryKey = '';
    protected $fillable = [
    ];
}

<?php

namespace App\Models\Random;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maeedo extends Model
{
    use HasFactory;

    protected $connection = 'random';
    protected $table = 'MAEEDO';
    protected $primaryKey = '';
    protected $fillable = [
    ];
}

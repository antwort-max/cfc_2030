<?php

namespace App\Models\Random;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maedpce extends Model
{
    use HasFactory;

    protected $connection = 'random';
    protected $table = 'MAEDPCE';
    protected $primaryKey = '';
    protected $fillable = [
    ];
}

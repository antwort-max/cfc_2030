<?php

namespace App\Models\Random;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maedpcd extends Model
{
    use HasFactory;

    protected $connection = 'random';
    protected $table = 'MAEDPCD';
    protected $primaryKey = '';
    protected $fillable = [
    ];
}

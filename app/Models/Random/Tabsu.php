<?php
// MAESTRO DE FUNCIONARIOS DE RANDOM
namespace App\Models\Random;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabsu extends Model
{
    use HasFactory;

    protected $connection = 'random';
    protected $table = 'TABSU';
    protected $primaryKey = '';
    protected $fillable = [

    ];

}

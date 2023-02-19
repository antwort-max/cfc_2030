<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFamily extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'mother', 'image', 'comment'];

}

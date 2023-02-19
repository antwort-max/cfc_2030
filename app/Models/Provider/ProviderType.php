<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProviderType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 'name', 'comment', ];

}

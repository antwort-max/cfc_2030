<?php

namespace App\Models\Provider;

use App\Models\Provider\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProviderContact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'name', 
        'phone', 
        'email', 
        'position', 
        'provider_id', 
        'image', 
        'oc',
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}

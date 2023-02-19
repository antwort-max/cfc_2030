<?php

namespace App\Models\Provider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Config\CommercialArea;
use App\Models\Provider\ProviderType;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 'name', 'comment', 'image', 'user_id', 'commercial_area_id', 'provider_type_id', ];

    public function commercial_area()
    {
        return $this->belongsTo(CommercialArea::class);
    }

    public function provider_type()
    {
        return $this->belongsTo(ProviderType::class);
    }
}

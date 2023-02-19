<?php

namespace App\Models\Config;

use App\Models\Config\AdministrativeArea;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdministrativeArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "administrative_areas";

    protected $fillable = [ 
        'name', 
        'comment', 
        'mother_id', 
    ];

    public function mother()
    {
        return $this->belongsTo(AdministrativeArea::class, 'mother_id', 'id');
    }


}

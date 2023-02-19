<?php

namespace App\Models\Document;

use App\Models\User;
use App\Models\Config\AdministrativeArea;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentFile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'name', 
        'comment', 
        'user_id',
        'area_id', 
        'file', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function administrative_area()
    {
        return $this->belongsTo(AdministrativeArea::class, 'area_id', 'id');
    }
}

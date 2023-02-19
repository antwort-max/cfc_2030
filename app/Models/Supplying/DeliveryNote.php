<?php

namespace App\Models\Supplying;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class DeliveryNote extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'user_id', 
        'number', 
        'date', 
        'number_order', 
        'image',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

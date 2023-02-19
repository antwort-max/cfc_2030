<?php

namespace App\Models\Worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerSalary extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'worker_id', 
        'year', 
        'amount', 
    ];

    public function worker()
    {
        return $this->belongsTo(Workers::class);
    }
}

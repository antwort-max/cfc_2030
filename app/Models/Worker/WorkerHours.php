<?php

namespace App\Models\Worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Worker\Workers;

class WorkerHours extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 'worker_id', 'name', 'date', 'hours', 'comment',
        'type', 'register', 'start', 'end'];

    public function worker()
    {
        return $this->belongsTo(Workers::class);
    }
}


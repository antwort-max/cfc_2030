<?php

namespace App\Models\Worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerPermissions extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 'worker_id', 'boos_id', 'name', 'date', 'hours', 'comment',
        'type', 'register', 'start', 'end', ];


}

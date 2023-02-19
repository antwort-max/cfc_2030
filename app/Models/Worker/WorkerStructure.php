<?php

namespace App\Models\Worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerStructure extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 'boos_id', 'employee_id'];
}

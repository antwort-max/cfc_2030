<?php

namespace App\Models\Worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerVacation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'worker_id', 
        'name', 
        'dni', 
        'date',
        'start',
        'end',
        'period_start_a',
        'period_end_a',
    	'period_a',
    	'period_start_b',
        'period_end_b',
    	'period_b',
        'business_days',
        'holidays_days',
    	'progresive_days',
    	'fraccion_days',
    	'slope_working',
    	'slope_holiday',
    	'slope_progresive',
    ];

    public function worker()
    {
        return $this->belongsTo(Workers::class);
    }
}

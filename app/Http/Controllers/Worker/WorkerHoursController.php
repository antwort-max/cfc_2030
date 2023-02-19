<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Models\Worker\WorkerHours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkerHoursController extends Controller
{
    public function index()
    {
        $data = WorkerHours::orderBy('date', 'desc')->get();
        //$data = WorkerHours::select('worker_id, hours')->get();
        $data = WorkerHours::select(
            DB::raw('sum(hours) as hours'),
            DB::raw('worker_id')
            )
            ->groupBy('worker_id')
            ->get();
        return view('worker.worker_hours.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(WorkerHours $workerHours)
    {
        //
    }

    public function edit(WorkerHours $workerHours)
    {
        //
    }

    public function update(Request $request, WorkerHours $workerHours)
    {
        //
    }

    public function destroy(WorkerHours $workerHours)
    {
        //
    }
}

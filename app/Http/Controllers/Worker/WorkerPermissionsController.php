<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Models\Worker\WorkerPermissions;
use App\Models\Worker\Workers;
use App\Models\Worker\WorkerHours;
use Illuminate\Http\Request;

class WorkerPermissionsController extends Controller
{
    
    public function index()
    {
        $data = WorkerPermissions::get();
        return view('worker.worker_permissions.index', compact('data'));

    }

    public function create()
    {
        $workers = Workers::get()->pluck('name','id');;
        return view('worker.worker_permissions.create', compact('workers'));
    }

    public function store(Request $request)
    {
        
        $worker_permissions             = New WorkerPermissions;
        $worker_permissions->worker_id  = e($request->worker_id);
        $worker_permissions->boss_id    = e($request->boss_id);
        $worker_permissions->name       = e($request->name);
        $worker_permissions->date       = e($request->date);
        $worker_permissions->hours      = e($request->hours);
        $worker_permissions->comment    = e($request->comment);
        $worker_permissions->save();

        $worker_hours                   = New WorkerHours;
        $worker_hours->worker_id        = e($request->worker_id);
        $worker_hours->name             = e($request->name);
        $worker_hours->date             = e($request->date);
        $worker_hours->hours            = e($request->hours);
        $worker_hours->comment          = e($request->comment);
        $worker_hours->type             = "Inasistencia y atrasos";
        $worker_hours->save();

        return redirect()->route('home')->with('info', 'Se ingreso el registro');

    }

    public function show(WorkerPermissions $workerPermissions)
    {
        //
    }

    public function edit(WorkerPermissions $workerPermissions)
    {
        //
    }

    public function update(Request $request, WorkerPermissions $workerPermissions)
    {
        //
    }

    public function destroy(WorkerPermissions $workerPermissions)
    {
        //
    }
}

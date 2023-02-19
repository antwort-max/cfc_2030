<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Models\Worker\WorkerStructure;
use Illuminate\Http\Request;

class WorkerStructureController extends Controller
{
    public function index()
    {
        $data = WorkerStructure::get();
        return view('worker.worker_structure.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(WorkerStructure $workerStructure)
    {
        //
    }

    public function edit(WorkerStructure $workerStructure)
    {
        //
    }

    public function update(Request $request, WorkerStructure $workerStructure)
    {
        //
    }

    public function destroy(WorkerStructure $workerStructure)
    {
        //
    }
}

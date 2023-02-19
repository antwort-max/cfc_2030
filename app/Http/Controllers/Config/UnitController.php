<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use App\Models\Config\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $data = Unit::All();
        return view('config.unit.index', compact('data'));
    }

    public function create()
    {
        return view('config.unit.create');
    }

    public function store(Request $request)
    {
        $unit           = New Unit;
        $unit->name     = e($request->name);
        $unit->type     = e($request->type);
        $unit->save();

        return redirect()->route('config.unit.index')->with('info', 'Se creo la unidad '.$unit->name);
    }

    public function show(Unit $unit)
    {
        return view('config.unit.edit', compact('unit'));
    }

    public function edit(Unit $unit)
    {
        return view('config.unit.edit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $unit->name     = e($request->name);
        $unit->type     = e($request->type);
        $unit->save();

        return redirect()->route('config.unit.index')->with('info', 'Se modifico la unidad '.$unit->name);

    }

    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('config.unit.index')->with('info', 'Se elimino la unidad '.$unit->name);

    }
}

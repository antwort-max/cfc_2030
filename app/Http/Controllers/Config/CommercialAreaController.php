<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use App\Models\Config\CommercialArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

class CommercialAreaController extends Controller
{
    public function index()
    {
        $data = CommercialArea::get();
        return view('config.commercial_area.index', compact('data'));
    }

    public function create()
    {
        return view('config.commercial_area.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:commercial_areas',
        ]);

        $commercial_area           = New CommercialArea;
        $commercial_area->name     = e($request->name);
        $commercial_area->comment  = e($request->comment);
        
        if ($request->hasFile('image'))
        {
            $commercial_area->image  = $request->file('image')->store('commercial_area', 'public');
        }
        
        $commercial_area->save();

        return redirect()->route('config.commercial_area.index')->with('info', 'Se creo una nueva area comercial '.$commercial_area->name);
    }

    public function show($id)
    {
        $commercial_area = CommercialArea::findOrFail($id);
        return view('config.commercial_area.show', compact('commercial_area'));
    }

    public function edit($id)
    {
        $commercial_area = CommercialArea::findOrFail($id);
        return view('config.commercial_area.edit', compact('commercial_area'));
    }

    public function update(Request $request, $id)
    {
        $commercial_area = CommercialArea::findOrFail($id);
        $commercial_area->name     = e($request->name);
        $commercial_area->comment  = e($request->comment);

        if ($request->hasFile('image'))
        {
            Storage::disk('public')->delete($commercial_area->image);
            $commercial_area->image  = $request->file('image')->store('commercial_area', 'public');
        }
        
        $commercial_area->save();

        return redirect()->route('config.commercial_area.index')->with('info', 'Se modifica el area '.$commercial_area->name);

    }

    public function destroy($id)
    {
        $commercial_area = CommercialArea::findOrFail($id);
        Storage::disk('public')->delete($commercial_area->image);
        $commercial_area->delete();
        return redirect()->route('config.commercial_area.index')->with('info', 'Se elimino el area '.$commercial_area->name);
    }
}

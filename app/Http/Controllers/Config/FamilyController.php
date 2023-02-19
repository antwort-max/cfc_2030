<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use App\Models\Config\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FamilyController extends Controller
{
    public function index()
    {
        $data = Family::All();
        return view('config.family.index', compact('data'));
    }

    public function create()
    {
        return view('config.family.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:families',
        ]);

        $family         = New Family;
        $family->name   = e($request->name);
        $family->mother = e($request->mother);

        if ($request->hasFile('image'))
        {
            $family->image  = $request->file('image')->store('family', 'public');
        }

        $family->save();
        return redirect()->route('config.family.index')->with('info', 'Se actualizo la familia '.$family->name);
    }

    public function show(Family $family)
    {

    }

    public function edit(Family $family)
    {
        return view('config.family.edit', compact('family'));
    }

    public function update(Request $request, Family $family)
    {
        $request->validate([
        ]);

        $family->name    = e($request->name);
        $family->mother  = e($request->mother);

        if ($request->hasFile('image'))
        {
            Storage::disk('public')->delete($family->image);
            $family->image  = $request->file('image')->store('family', 'public');
        }
        $family->save();

        return redirect()->route('config.family.index')->with('info', 'Se modifico la familia '.$family->name);
    }

    public function destroy(Family $family)
    {
        Storage::disk('public')->delete($family->image);
        $family->delete();
        return redirect()->route('config.family.index')->with('info', 'Se elimino la familia '.$family->name);
    }
}

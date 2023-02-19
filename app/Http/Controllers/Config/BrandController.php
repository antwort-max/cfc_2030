<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use App\Models\Config\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $data = Brand::All();
        return view('config.brand.index', compact('data'));
    }

    public function create()
    {
        return view('config.brand.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands',
        ]);

        $brand               = New Brand;
        $brand->name         = e($request->name);
        $brand->country      = e($request->country);

        if ($request->hasFile('image'))
        {
            $brand->image  = $request->file('image')->store('brand', 'public');
        }

        $brand->save();
        return redirect()->route('config.brand.index')->with('info', 'Se actualizo la marca '.$brand->name);
    }

    public function show(Brand $brand)
    {
        //
    }

    public function edit(Brand $brand)
    {
        return view('config.brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
        ]);

        $brand->name       = e($request->name);
        $brand->country    = e($request->country);

        if ($request->hasFile('image'))
        {
            Storage::disk('public')->delete($brand->image);
            $brand->image  = $request->file('image')->store('brand', 'public');
        }
        $brand->save();

        return redirect()->route('config.brand.index')->with('info', 'Se modifico la marca '.$brand->name);
    }

    public function destroy(Brand $brand)
    {
        Storage::disk('public')->delete($brand->image);
        $brand->delete();
        return redirect()->route('config.brand.index')->with('info', 'Se elimino la marca '.$brand->name);

    }
}

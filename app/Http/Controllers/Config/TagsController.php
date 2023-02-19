<?php

namespace App\Http\Controllers\Config;

use App\Models\Config\Tags;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagsController extends Controller
{
    public function index()
    {
        $data = Tags::get();
        return view('config.tags.index', compact('data'));
    }

    public function create()
    {
        return view('config.tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags',
        ]);

        $tags           = New Tags;
        $tags->name     = e($request->name);
        $tags->comment  = e($request->comment);
        $tags->color    = e($request->color);
        $tags->slug     = Str::slug($request->name);
        $tags->save();

        return redirect()->route('config.tags.index')->with('info', 'Se creo un nuevo tag '.$tags->name);
    }

    public function show($slug)
    {
        $tags = Tags::where('slug', $slug)->first();
        return view('config.tags.show', compact('tags'));
    }

    public function edit($slug)
    {
        $tags = Tags::where('slug', $slug)->first();
        return view('config.tags.edit', compact('tags'));
    }

    public function update(Request $request, $id)
    {
        $tags = Tags::findOrFail($id);
        $tags->name     = e($request->name);
        $tags->comment  = e($request->comment);
        $tags->color    = e($request->color);
        $tags->slug     = Str::slug($request->name);
        $tags->save();

        return redirect()->route('config.tags.index')->with('info', 'Se modifico un tag '.$tags->name);
    }

    public function destroy($slug)
    {
        $tags = Tags::where('slug', $slug)->first();
        $tags->delete();
        return redirect()->route('config.tags.index')->with('info', 'Se elimino el tag '.$tags->name);
    }
}

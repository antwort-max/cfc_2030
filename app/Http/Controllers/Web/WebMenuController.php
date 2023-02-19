<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\WebMenu;
use Illuminate\Http\Request;


class WebMenuController extends Controller
{
    public function index()
    {
        $data = WebMenu::get();
        return view('web.web_menu.index', compact('data'));
    }

    public function create()
    {
        return view('web.web_menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:web_menus',
        ]);

        $webMenu           = New WebMenu;
        $webMenu->menu     = e($request->menu);
        $webMenu->name     = e($request->name);
        $webMenu->favicon  = e($request->favicon);
        $webMenu->route    = e($request->route);
        $webMenu->can      = e($request->can);
        $webMenu->save();

        return redirect()->route('web.web_menu.index')->with('info', 'Se creo un nuevo menu '.$webMenu->name);
    }

    public function show(WebMenu $webMenu)
    {
        return view('web.web_menu.show', compact('webMenu'));
    }

    public function edit(WebMenu $webMenu)
    {
        return view('web.web_menu.edit', compact('webMenu'));
    }

    public function update(Request $request, $id)
    {
        $webMenu = webMenu::findOrFail($id);
        $webMenu->menu     = e($request->menu);
        $webMenu->name     = e($request->name);
        $webMenu->favicon  = e($request->favicon);
        $webMenu->route    = e($request->route);
        $webMenu->can      = e($request->can);
        $webMenu->save();

        return redirect()->route('web.web_menu.index')->with('info', 'Se modifica un nuevo menu '.$webMenu->name);
    }


    public function destroy(WebMenu $webMenu)
    {
        $webMenu->delete();
        return redirect()->route('web.web_menu.index')->with('info', 'Se elimino el menu '.$webMenu->name);

    }
}

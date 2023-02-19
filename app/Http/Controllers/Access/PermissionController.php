<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use App\Models\Access\Permission;
use Illuminate\Http\Request;


class PermissionController extends Controller
{
    public function index()
    {
        $data = Permission::All();
        return view('access.permission.index', compact('data'));
    }

    public function create()
    {
        return view('access.permission.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions',
        ]);

        $permission                    = New Permission;
        $permission->name              = e($request->name);
        $permission->guard_name        = 'web';
        $permission->save();

        return redirect()->route('access.permission.index');
    }

    public function show($id)
    {

    }

    public function edit(Permission $permission)
    {
        return view('access.permission.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions',
        ]);

        $permission->name       = e($request->name);
        $permission->guard_name = 'web';
        $permission->save();

        return redirect()->route('access.permission.index');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('access.permission.index');
    }
}

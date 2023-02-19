<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::All();
        return view('access.role.index', compact('roles'));
    }

    public function create()
    {
        return view('access.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
        ]);

        $role                    = New Role;
        $role->name              = e($request->name);
        $role->guard_name        = 'web';
        $role->save();

        return redirect()->route('access.role.index');
    }

    public function show(Role $role)
    {
        //
    }

    public function permission(Request $request, Role $role)
    {
        $role->syncPermissions($request->permission);
        return redirect()->route('access.role.index')->with('info', 'Se asignaron los permisos en el '.$role->name);
    }

    public function edit(Role $role)
    {
        $permissions = Permission::get();
        return view('access.role.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles',
        ]);

        $role->name       = e($request->name);
        $role->guard_name = 'web';
        $role->save();

        return redirect()->route('access.role.index')->with('info', 'Se modificaron los permisos en el '.$role->name);
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('access.role.index');
    }
}

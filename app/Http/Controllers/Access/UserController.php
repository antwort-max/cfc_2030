<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use App\Models\User as DbData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Access\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->area_name = "Control Acceso";
        $this->area_route = "home";
        $this->controller_name = "Acceso";
        $this->controller_route = 'access.user';

        $this->breadcrumb = [
            'home', 
            'Home', 
            $this->area_route, 
            $this->controller_name, 
            $this->controller_route.'.index', 
            'Lista Usuarios'
        ];
       
        $this->route = [
            'index'     => $this->controller_route.'.index',
            'show'      => $this->controller_route.'.show',
            'create'    => $this->controller_route.'.create',
            'store'     => $this->controller_route.'.store',
            'edit'      => $this->controller_route.'.edit',
            'update'    => $this->controller_route.'.update',
            'destroy'   => $this->controller_route.'.destroy',
        ];

        $this->url = [
            'index' => 'access.user1.index',
            'form'  => 'access.user1.form',
            'data'  => 'access.user1.data',
        ];
    }

    public function index()
    {
        $data           = DbData::get();
        $title['page']  = $this->area_name." ".$this->controller_name;
        $title['card']  = $this->controller_name." [".$data->count()."]"; 
        $breadcrumb     = $this->breadcrumb;
        $route          = $this->route;
        $url            = $this->url;

        return view($this->url['index'], compact('data', 'title', 'breadcrumb', 'route', 'url'));
    }

    public function create()
    {
        $title['page']  = $this->area_name." ".$this->controller_name;
        $title['card']  = "Nuevo ".$this->controller_name; 
        $breadcrumb     = $this->breadcrumb;
        $route          = $this->route;
        $url            = $this->url;
        $status_form    = "create";
        $roles          = Role::all();

        return view($this->url['form'],compact('roles', 'title', 'status_form', 'breadcrumb', 'route', 'url'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user               = New DbData;
        $user->name         = e($request->name);
        $user->phone        = e($request->phone);
        $user->whatsapp     = e($request->whatsapp);
        $user->email        = e($request->email);
        $user->password     = Hash::make($request->password);
        $user->save();
        
        if ($request->hasFile('image'))
        {
            $data = DbData::orderBy('id', 'desc')->first();
            $data->image  = $request->file('image')->store('accessUser', 'public');
            $data->update();
        }
        
        return redirect()->route($this->route['index'])->with('success','User created successfully.');
    }

    public function show($id)
    {
        $data           = DbData::findOrFail($id);
        $title['page']  = $this->area_name." ".$this->controller_name;
        $title['card']  = $this->controller_name." [ ". $data->name . " ]"; 
        $breadcrumb     = $this->breadcrumb;
        $route          = $this->route;
        $url            = $this->url;
        $status_form    = "show";
        $roles          = Role::all();

        return view($this->url['form'], compact('roles', 'data', 'title', 'status_form', 'breadcrumb', 'route', 'url'));
    }

    public function edit($id)
    {
        $data           = DbData::findOrFail($id);
        $title['page']  = $this->area_name." ".$this->controller_name;
        $title['card']  = $this->controller_name." [ ". $data->name . " ]"; 
        $breadcrumb     = $this->breadcrumb;
        $route          = $this->route;
        $url            = $this->url;
        $status_form    = "edit";
        $roles          = Role::all();

        return view($this->url['form'], compact('roles', 'data', 'title', 'status_form', 'route', 'breadcrumb', 'url'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $data = DbData::findOrFail($id);
        $data->name     = e($request->name);
        $data->phone    = e($request->phone);
        $data->whatsapp = e($request->whatsapp);

        if ($data->email <> $request->email)
        {
            $data->email = e($request->email);
        }

        if($request->password <> '')
        {
            $data->password = Hash::make($request->password);
        } else {
            $data->password = $data->password;
        }
        $data->update();
        
        if ($request->hasFile('image'))
        {
            $data->image  = $request->file('image')->store('accessUser', 'public');
            $data->update();
        }

        return redirect()->route($this->route['index'])->with('success','User created successfully.');
    }

    public function destroy($id)
    {
        $data     = DbData::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();
        return redirect()->route($this->route['index'])->with('success','User created successfully.');
    }

    public function role(Request $request, DbData $user)
    {
        $user->roles()->sync($request->role);

        return redirect()->route($this->route['index'])->with('info', 'Se asignaron los roles a '.$user->name);
    }

    public function profile($username)
    {
        echo (auth()->user()->id);
        $data = DbData::findOrFail(auth()->user()->id);
        return view('access.user1.profile', compact('data'))->with('info', 'Modificando el perfil de'.$data->name);
    }

    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $data = DbData::findOrFail($id);
        $data->name     = e($request->name);
        $data->phone    = e($request->phone);
        $data->whatsapp = e($request->whatsapp);

        if ($data->email <> $request->email)
        {
            $data->email = e($request->email);
        }

        $data->update();
        
        if ($request->hasFile('image'))
        {
            Storage::disk('public')->delete($data->image);
            $data->image  = $request->file('image')->store('accessUser', 'public');
            $data->update();
        }

        return redirect()->route('home')->with('success','Perfil Actualizado');
    }
}

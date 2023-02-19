<?php

namespace App\Http\Controllers\Supplying;

use App\Http\Controllers\Controller;
use App\Models\Supplying\DeliveryNote as DbData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeliveryNoteController extends Controller
{
    public function __construct()
    {
        $this->area_name = "Adquisiciones";
        $this->area_route = "home";
        $this->controller_name = "Documento de Entrega";
        $this->controller_route = 'supplying.delivery.note';

        $this->breadcrumb = [
            'home', 
            'Dashboard', 
            $this->area_route, 
            $this->area_name,
            $this->controller_route.'.index', 
            $this->controller_name,
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
            'index' => 'supplying.delivery.note.index',
            'form'  => 'supplying.delivery.note.form',
            'data'  => 'supplying.delivery.note.data',
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
        $user           =  User::get()->pluck('name', 'id');

        return view($this->url['form'],compact('user', 'title', 'status_form', 'breadcrumb', 'route', 'url'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',

        ]);
    
        DbData::create($request->all());
        
        if ($request->hasFile('image'))
        {
            $data = DbData::orderBy('id', 'desc')->first();
            $data->image  = $request->file('image')->store('deliveryNote', 'public');
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
        $user           =  User::get()->pluck('name', 'id');

        return view($this->url['form'], compact('user', 'data', 'title', 'status_form', 'breadcrumb', 'route', 'url'));
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
        $user           =  User::get()->pluck('name', 'id');

        return view($this->url['form'], compact('user', 'data', 'title', 'status_form', 'route', 'breadcrumb', 'url'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'number' => 'required',
        ]);

        $data = DbData::findOrFail($id);
        $data->update($request->all());

        if ($request->hasFile('image'))
        {
            $data->image  = $request->file('image')->store('deliveryNote', 'public');
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
}

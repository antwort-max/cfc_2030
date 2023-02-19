<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Provider\ProviderContact as DbData;
use App\Models\Provider\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProviderContactController extends Controller
{
    public function __construct()
    {
        $this->area_name = "Proveedores";
        $this->area_route = "home";
        $this->controller_name = "Contactos";
        $this->controller_route = 'provider.provider_contact';

        $this->breadcrumb = [
            'home', 
            'Dashboard', 
            $this->area_route, 
            'Crm', 
            $this->controller_route.'.index', 
            'Contactos'
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
            'index' => 'provider.provider_contact.index',
            'form'  => 'provider.provider_contact.form',
            'data'  => 'provider.provider_contact.data',
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
        $providers      = Provider::get()->pluck('name', 'id');

        return view($this->url['form'],compact('providers', 'title', 'status_form', 'breadcrumb', 'route', 'url'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
    
        DbData::create($request->all());
        
        if ($request->hasFile('image'))
        {
            $data = DbData::orderBy('id', 'desc')->first();
            $data->image  = $request->file('image')->store('providerContact', 'public');
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
        $providers      = Provider::get()->pluck('name', 'id');

        return view($this->url['form'], compact('providers', 'data', 'title', 'status_form', 'breadcrumb', 'route', 'url'));
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
        $providers      = Provider::get()->pluck('name', 'id');

        return view($this->url['form'], compact('providers', 'data', 'title', 'status_form', 'route', 'breadcrumb', 'url'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = DbData::findOrFail($id);
        $data->update($request->all());

        if ($request->hasFile('image'))
        {
            $data->image  = $request->file('image')->store('providerContact', 'public');
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

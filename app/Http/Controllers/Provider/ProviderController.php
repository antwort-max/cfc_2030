<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Provider\Provider as DbData;
use App\Models\Provider\ProviderType; 
use App\Models\Config\CommercialArea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProviderController extends Controller
{
    public function __construct()
    {
        $this->area_name = "Proveedor";
        $this->area_route = "home";
        $this->controller_name = "Proveedor";
        $this->controller_route = 'provider.provider';

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
            'index' => 'provider.provider.index',
            'form'  => 'provider.provider.form',
            'data'  => 'provider.provider.data',
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
        $providerType   =  ProviderType::get()->pluck('name', 'id');
        $commercialArea =  CommercialArea::get()->pluck('name', 'id');
        $user           =  User::get()->pluck('name', 'id');

        return view($this->url['form'],compact('providerType', 'commercialArea', 'user', 'title', 'status_form', 'breadcrumb', 'route', 'url'));
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
            $data->image  = $request->file('image')->store('provider', 'public');
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
        $providerType   =  ProviderType::get()->pluck('name', 'id');
        $commercialArea  =  CommercialArea::get()->pluck('name', 'id');
        $user           =  User::get()->pluck('name', 'id');

        return view($this->url['form'], compact('providerType', 'commercialArea', 'user', 'data', 'title', 'status_form', 'breadcrumb', 'route', 'url'));
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
        $providerType   =  ProviderType::get()->pluck('name', 'id');
        $commercialArea  =  CommercialArea::get()->pluck('name', 'id');
        $user           =  User::get()->pluck('name', 'id');

        return view($this->url['form'], compact('providerType', 'commercialArea', 'user', 'data', 'title', 'status_form', 'route', 'breadcrumb', 'url'));
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
            $data->image  = $request->file('image')->store('provider', 'public');
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

<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use App\Models\Config\AdministrativeArea as DbData;
use App\Models\Config\AdministrativeArea as select;
use Illuminate\Http\Request;

class AdministrativeAreaController extends Controller
{
    public function __construct()
    {
        $this->area_name = "Configurar";
        $this->area_route = "home";
        $this->controller_name = "Area administrativa";
        $this->controller_route = 'config.administrative_area';

        $this->breadcrumb = [
            'home', 
            'Dashboard', 
            $this->area_route, 
            $this->controller_name, 
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
            'index' => 'config.administrative_area.index',
            'form'  => 'config.administrative_area.form',
            'data'  => 'config.administrative_area.data',
        ];
    }

    public function index()
    {
        $data           = DbData::get();
        $title['page']  = $this->area_name." ".$this->controller_name;
        $title['card']  = $this->controller_name." [".$data->count()."]"; 
        $breadcrumb     = $this->breadcrumb;
        $route          = $this->route;
       
        return view($this->url['index'], compact('data', 'title', 'breadcrumb', 'route'));
    }

    public function create()
    {
        $title['page']  = $this->area_name." ".$this->controller_name;
        $title['card']  = "Nuevo ".$this->controller_name; 
        $breadcrumb     = $this->breadcrumb;
        $route          = $this->route;
        $url            = $this->url;
        $status_form    = "create";
        $select         = select::get()->pluck('name', 'id');

        return view($this->url['form'],compact('url', 'select', 'title', 'status_form', 'breadcrumb', 'route'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:administrative_areas',
        ]);
       
        DbData::create($request->all());
        return redirect()->route($this->route['index'])->with('success','Se creo el registro.');
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
        $select         = select::get()->pluck('name', 'id');

        return view($this->url['form'], compact('url', 'select', 'data', 'title', 'status_form', 'breadcrumb', 'route'));
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
        $select         = select::get()->pluck('name', 'id');

        return view($this->url['form'], compact('url', 'select', 'data', 'title', 'status_form', 'route', 'breadcrumb'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:administrative_areas',
        ]);
       
        $data           = DbData::findOrFail($id);
        $data->update($request->all());
        return redirect()->route($this->route['index'])->with('success','Se actualizo el registro.');
    }

    public function destroy($id)
    {
        $data           = DbData::findOrFail($id);
        $data->delete();
        return redirect()->route($this->route['index'])->with('success','Se borro el registro.');
    }
}
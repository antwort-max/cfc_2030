<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use App\Models\Control\ProductPenden as DbData;
use Illuminate\Http\Request;

class ProductPendenController extends Controller
{
    public function __construct()
    {
        $this->area_name = "Control";
        $this->area_route = "home";
        $this->controller_name = "Productos pendientes";
        $this->controller_route = 'control.product_pendens';

        $this->breadcrumb = [
            'home', 
            'Dashboard', 
            $this->area_route, 
            $this->area_name, 
            $this->controller_route.'.index', 
            $this->controller_name
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
            'index' => 'control.product_pendens.index',
            'form'  => 'control.product_pendens.form',
            'data'  => 'control.product_pendens.data',
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

        return view($this->url['form'],compact('url', 'title', 'status_form', 'breadcrumb', 'route'));
    }

    public function store(Request $request)
    {
        $request->validate([
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

        return view($this->url['form'], compact('url', 'data', 'title', 'status_form', 'breadcrumb', 'route'));
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

        return view($this->url['form'], compact('url', 'data', 'title', 'status_form', 'route', 'breadcrumb'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        ]);
    
        $data = DbData::findOrFail($id);
        $data->update($request->all());

        return redirect()->route($this->route['index'])->with('success','Se modifico el registro.');
    }

    public function destroy($id)
    {
        $data     = DbData::findOrFail($id);

        $data->delete();
        return redirect()->route($this->route['index'])->with('success','Se elimino el registro.');
    }
}
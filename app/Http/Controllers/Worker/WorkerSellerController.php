<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Models\Worker\WorkerSeller as DbData;
use App\Models\Worker\Workers;
use Illuminate\Http\Request;

class WorkerSellerController extends Controller
{
    public function __construct()
    {
        $this->area_name = "Trabajador";
        $this->area_route = "home";
        $this->controller_name = "Vendedor";
        $this->controller_route = 'worker.worker_seller';

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
            'index' => 'worker.worker_seller.index',
            'form'  => 'worker.worker_seller.form',
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
        $status_form    = "create";
        $workers        = Workers::get()->pluck('name', 'id');

        return view($this->url['form'],compact('workers', 'title', 'status_form', 'breadcrumb', 'route'));
    }

    public function store(Request $request)
    {
       
        DbData::create($request->all());
        return redirect()->route($this->route['index'])->with('success','User created successfully.');
    }

    public function show($id)
    {
        $data           = DbData::findOrFail($id);
        $title['page']  = $this->area_name." ".$this->controller_name;
        $title['card']  = $this->controller_name." [ ". $data->name . " ]"; 
        $breadcrumb     = $this->breadcrumb;
        $route          = $this->route;
        $status_form    = "show";
        $workers        = Workers::get()->pluck('name', 'id');

        return view($this->url['form'], compact('workers', 'data', 'title', 'status_form', 'breadcrumb', 'route'));
    }

    public function edit($id)
    {
        $data           = DbData::findOrFail($id);
        $title['page']  = $this->area_name." ".$this->controller_name;
        $title['card']  = $this->controller_name." [ ". $data->name . " ]"; 
        $breadcrumb     = $this->breadcrumb;
        $route          = $this->route;
        $status_form    = "edit";
        $workers        = Workers::get()->pluck('name', 'id');

        return view($this->url['form'], compact('workers', 'data', 'title', 'status_form', 'route', 'breadcrumb'));
    }

    public function update(Request $request, $id)
    {
        $data           = DbData::findOrFail($id);
        $data->update($request->all());
        return redirect()->route($this->route['index'])->with('success','User created successfully.');
    }

    public function destroy($id)
    {
        $data           = DbData::findOrFail($id);
        $data->delete();
        return redirect()->route($this->route['index'])->with('success','User created successfully.');
    }
}

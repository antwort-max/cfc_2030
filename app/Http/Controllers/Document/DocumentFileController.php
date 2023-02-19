<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\Document\DocumentFile as DbData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Config\AdministrativeArea;
use App\Models\User;



class DocumentFileController extends Controller
{
    public function __construct()
    {
        $this->area_name = "Documentos";
        $this->area_route = "home";
        $this->controller_name = "Tipo de archivos";
        $this->controller_route = 'document.file';

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
            'index' => 'document.file.index',
            'form'  => 'document.file.form',
            'data'  => 'document.file.data',
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
        $area           = AdministrativeArea::get()->pluck('name', 'id');
        $user           = User::get()->pluck('name', 'id');

        return view($this->url['form'],compact('area', 'user', 'url', 'title', 'status_form', 'breadcrumb', 'route'));
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
            $data->image  = $request->file('image')->store('product', 'public');
            $data->update();
        }
    
        return redirect()->route($this->route['index'])->with('success','Se creo un registro.');
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
        $area           = AdministrativeArea::get()->pluck('name', 'id');
        $user           = User::get()->pluck('name', 'id');

        return view($this->url['form'], compact('area', 'user', 'url', 'data', 'title', 'status_form', 'breadcrumb', 'route'));
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
        $area           = AdministrativeArea::get()->pluck('name', 'id');
        $user           = User::get()->pluck('name', 'id');

        return view($this->url['form'], compact('area', 'user', 'url', 'data', 'title', 'status_form', 'route', 'breadcrumb'));
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
            $data->image  = $request->file('image')->store('product', 'public');
            $data->update();
        }
    
        return redirect()->route($this->route['index'])->with('success','Se actualizo el registro.');
    }

    public function destroy($id)
    {
        $data = DbData::findOrFail($id);
        Storage::disk('public')->delete($data->image);
        $data->delete();

        return redirect()->route($this->route['index'])->with('success','Se elimino el registro.');
    }
}

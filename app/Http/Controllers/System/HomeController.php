<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Rest\TablesController;
use App\Models\User;
use App\Models\Web\WebProduct;
use App\Models\Product\Product;
use App\Models\Worker\WorkerVacation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = User::All();
        return view('system.home', compact('data'));
    }

    public function product(Request $request)
    {
        $data = User::All();
        $web_product = WebProduct::where('code', 'LIKE', '%'.$request->search.'%')
            ->orWhere('name', 'LIKE', '%'.$request->search.'%')
        	->orWhere('family', 'LIKE', '%'.$request->search.'%')
        	->orWhere('brand', 'LIKE', '%'.$request->search.'%')
            ->get();

        return view('system.home', compact('data', 'web_product'));
    }

    public function kardex($code)
    {
        $data = User::All();

        $product = Product::where('erp_code', '=', $code)->first();

        $web_product = WebProduct::where('code', '=', $code)->first();

        $sql        = new TablesController();
        $web_stock  = $sql->Product_stock($code);


        return view('system.kardex', compact('data', 'web_product', 'web_stock', 'product'));
    }

    public function worker_vacation()
    {
        $data = User::All();
        $to_day = date('Y/m/d');
        $worker_vacation = WorkerVacation::where('start', '<=', $to_day)
        ->Where('end', '>', $to_day)->get();

        return view('system.home', compact('data', 'worker_vacation'));
    }
}

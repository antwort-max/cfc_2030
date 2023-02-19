<?php

namespace App\Http\Controllers\Random\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Random\Sales\SqlSalesRandomController;
use App\Http\Controllers\Random\DateController;

class SellerController extends Controller
{

    public function index(Request $request)
    {
        $date           = new DateController(); 
        $fechaInicial   = $date->start($request->get('fechaInicial'));
        $fechaFinal     = $date->finish($request->get('fechaFinal'));
     
        $titulo         = "Venta por vendedor desde : ".$date->human($fechaInicial)." hasta ".$date->human($fechaFinal); 

        $sql            = new SqlSalesRandomController();
        $ventas         = $sql->ventaVendedores($fechaInicial, $fechaFinal);
    
        dd($ventas);
        return view('random.sales.seller.index', compact('ventas', 'titulo', 'fechaInicial', 'fechaFinal')); 
    }

}

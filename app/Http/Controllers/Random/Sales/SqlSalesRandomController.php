<?php

namespace App\Http\Controllers\Random\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Random\Maeedo;
use App\Models\Random\Maeddo;
use App\Models\Random\Tabfu;
use App\Models\Random\Tabsu;
use App\Models\Random\Maedpce;
use App\Models\Random\Maedpcd;
use Illuminate\Support\Facades\DB;


class SqlSalesRandomController extends Controller
{
    public function documentDelivery($documentNumber, $documentType)
    {
        $sql = Maeddo::where('MAEDDO.NUDOPA', '=', $documentNumber)
            -> where('MAEDDO.TIDOPA', '=', $documentType)
            -> get();
        
        return $sql;
    }

    public function documentHeader($documentNumber, $documentType)
    {
        $sql = Maeedo::join('TABFU', 'MAEEDO.KOFUDO', 'TABFU.KOFU')
            -> join('MAEEDOOB', 'MAEEDO.IDMAEEDO', 'MAEEDOOB.IDMAEEDO')
        	-> join('TABSU', 'MAEEDO.SUDO', 'TABSU.KOSU')
            -> join('MAEEN', 'MAEEDO.ENDO', 'MAEEN.RTEN')
    		-> where('MAEEDO.NUDO', '=', $documentNumber)
            -> where('MAEEDO.TIDO', '=', $documentType)
            -> first();
        
        if ($sql == Null) {

            $sql = Maeedo::join('TABFU', 'MAEEDO.KOFUDO', 'TABFU.KOFU')
                -> join('TABSU', 'MAEEDO.SUDO', 'TABSU.KOSU')
                -> join('MAEEN', 'MAEEDO.ENDO', 'MAEEN.RTEN')
                -> where('MAEEDO.NUDO', '=', $documentNumber)
                -> where('MAEEDO.TIDO', '=', $documentType)
                -> first();
        }

        return $sql;
    }

    public function documentBody($documentNumber, $documentType)
    {
        $sql = Maeddo::where('MAEDDO.NUDO', '=', $documentNumber)
            -> where('MAEDDO.TIDO', '=', $documentType)
            -> get();
        
        return $sql;
    }


    public function invoiceHeader($invoiceNumber)
    {
        $sql = Maeedo::join('TABFU', 'MAEEDO.KOFUDO', 'TABFU.KOFU')
            -> join('MAEEDOOB', 'MAEEDO.IDMAEEDO', 'MAEEDOOB.IDMAEEDO')
        	-> join('TABSU', 'MAEEDO.SUDO', 'TABSU.KOSU')
            -> join('MAEEN', 'MAEEDO.ENDO', 'MAEEN.RTEN')
    		-> where('MAEEDO.NUDO', '=', $invoiceNumber)
            -> orderby('FEEMDO', 'desc')->first();
        
        if ($sql == Null) {

            $sql = Maeedo::join('TABFU', 'MAEEDO.KOFUDO', 'TABFU.KOFU')
                -> join('TABSU', 'MAEEDO.SUDO', 'TABSU.KOSU')
                -> join('MAEEN', 'MAEEDO.ENDO', 'MAEEN.RTEN')
                -> where('MAEEDO.NUDO', '=', $invoiceNumber)
                -> orderby('FEEMDO', 'desc')->first();
        }

        return $sql;
    }

    public function invoiceBody($invoiceNumber)
    {
        $sql = Maeddo::where ('MAEDDO.NUDO', '=', $invoiceNumber)
            -> get();
        
        return $sql;
    }

    public function ventaVendedores($fechaInicial, $fechaFinal)
    {
        $sql = Maeddo::join('TABFU', 'MAEDDO.KOFULIDO', 'TABFU.KOFU')
            -> selectRaw("TABFU.KOFU AS CODIGO, TABFU.NOKOFU AS TIPO,
                COUNT (DISTINCT MAEDDO.NUDO) AS CANTIDAD,
                SUM(CASE WHEN TIDO = 'NCV' THEN -1 * VANELI ELSE VANELI END) AS MONTO,
                SUM(CASE WHEN TIDO = 'NCV' THEN -1 * CAPRCO1 * PPPRPM ELSE CAPRCO1 * PPPRPM END) AS COSTO,
                SUM(CASE WHEN TIDO = 'NCV' THEN -1 * (VANELI - CAPRCO1 * PPPRPM) ELSE (VANELI - CAPRCO1 * PPPRPM) END) AS MARGEN")
            -> whereIn ('MAEDDO.TIDO', ['FCV', 'BLV', 'NCV'])
            -> where ('MAEDDO.NUDO', 'NOT LIKE', 'F%')
            -> where ('MAEDDO.NUDO', 'NOT LIKE', 'B%')
            -> whereRaw("(MAEDDO.FEEMLI BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
            -> groupBy('TABFU.NOKOFU', 'TABFU.KOFU')
            -> orderby('MONTO', 'desc')
            -> get();
        
        return $sql;
    }

    public function ventaVendedor($vendedor, $fechaInicial, $fechaFinal)
    {
    	//dd([$vendedor]);
        $sql = Maeddo::join('TABFU', 'MAEDDO.KOFULIDO', 'TABFU.KOFU')
        -> selectRaw("TABFU.KOFU AS CODIGO, TABFU.NOKOFU AS TIPO,
            COUNT (DISTINCT MAEDDO.NUDO) AS CANTIDAD,
            SUM(CASE WHEN TIDO = 'NCV' THEN -1 * VANELI ELSE VANELI END) AS MONTO,
            SUM(CASE WHEN TIDO = 'NCV' THEN -1 * CAPRCO1 * PPPRPM ELSE CAPRCO1 * PPPRPM END) AS COSTO,
            SUM(CASE WHEN TIDO = 'NCV' THEN -1 * (VANELI - CAPRCO1 * PPPRPM) ELSE (VANELI - CAPRCO1 * PPPRPM) END) AS MARGEN")
        -> whereIn ('MAEDDO.TIDO', ['FCV', 'BLV', 'NCV'])
        -> where ('TABFU.KOFU', 'like', $vendedor)
        -> where ('MAEDDO.NUDO', 'NOT LIKE', 'F%')
        -> where ('MAEDDO.NUDO', 'NOT LIKE', 'B%')
        -> whereRaw("(MAEDDO.FEEMLI BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
        -> groupBy('TABFU.NOKOFU', 'TABFU.KOFU')
        -> get();

        return $sql;
    }

    public function ventaVendedorArea($vendedor, $fechaInicial, $fechaFinal)
    {
        $sql = Maeddo::join('MAEPR', 'MAEDDO.KOPRCT', 'MAEPR.KOPR')
        -> join('TABFU', 'MAEPR.KOFUPR', 'TABFU.KOFU')
        -> select(\DB::raw("TABFU.NOKOFU AS TIPO,
            COUNT (DISTINCT MAEDDO.NUDO) AS CANTIDAD,
            SUM(CASE WHEN TIDO = 'NCV' THEN VANELI * - 1 ELSE VANELI END) AS MONTO,
            SUM(CASE WHEN TIDO = 'NCV' THEN -1 * CAPRCO1 * PPPRPM ELSE CAPRCO1 * PPPRPM END) AS COSTO,
            SUM(CASE WHEN TIDO = 'NCV' THEN -1 * (VANELI - CAPRCO1 * PPPRPM) ELSE (VANELI - CAPRCO1 * PPPRPM) END) AS MARGEN"))
        -> whereIn ('MAEDDO.TIDO', ['FCV', 'BLV', 'NCV', 'FDV'])
        -> where ('MAEDDO.KOFULIDO', 'LIKE', $vendedor)
        -> where ('MAEDDO.NUDO', 'NOT LIKE', 'F%')
        -> where ('MAEDDO.NUDO', 'NOT LIKE', 'B%')
        -> whereRaw("(MAEDDO.FEEMLI BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
        -> groupBy('TABFU.NOKOFU')
        -> orderby('MONTO', 'desc')
        -> get();

        return $sql;
    }

    public function saleSellerArea()
    	{
    	$fechaInicial ='2022-12-01';
    	$fechaFinal	= '2022-12-31';
    	$vendedor = 'V16';
 		
    	 $sql = Maeddo::join('MAEPR', 'MAEDDO.KOPRCT', 'MAEPR.KOPR')
        	-> join('TABFU', 'MAEPR.KOFUPR', 'TABFU.KOFU')
        	-> select(\DB::raw("TABFU.NOKOFU AS TIPO,MAEDDO.KOFULIDO AS VENDEDOR,
            	COUNT (DISTINCT MAEDDO.NUDO) AS CANTIDAD,
            	SUM(CASE WHEN TIDO = 'NCV' THEN VANELI * - 1 ELSE VANELI END) AS MONTO,
            	SUM(CASE WHEN TIDO = 'NCV' THEN -1 * CAPRCO1 * PPPRPM ELSE CAPRCO1 * PPPRPM END) AS COSTO,
            	SUM(CASE WHEN TIDO = 'NCV' THEN -1 * (VANELI - CAPRCO1 * PPPRPM) ELSE (VANELI - CAPRCO1 * PPPRPM) END) AS MARGEN"))
        	-> whereIn ('MAEDDO.TIDO', ['FCV', 'BLV', 'NCV', 'FDV'])
        	//-> where ('MAEDDO.KOFULIDO', 'LIKE', $vendedor)
        	-> where ('MAEDDO.NUDO', 'NOT LIKE', 'F%')
        	-> where ('MAEDDO.NUDO', 'NOT LIKE', 'B%')
        	-> whereRaw("(MAEDDO.FEEMLI BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
        	-> groupBy('TABFU.NOKOFU', 'MAEDDO.KOFULIDO')
        	-> orderby('MONTO', 'desc')
        	-> get();

        return $sql;
    	}
    
    public function saleBrand($fechaInicial, $fechaFinal)
    {
        $sql = Maeddo::join('MAEPR', 'MAEDDO.KOPRCT', 'MAEPR.KOPR')
            -> join ('TABMR', 'MAEPR.MRPR', 'TABMR.KOMR')
            -> select(\DB::raw("TABMR.NOKOMR AS TIPO,
                COUNT (DISTINCT MAEDDO.NUDO) AS CANTIDAD,
                SUM(CASE WHEN TIDO = 'NCV' THEN VANELI * - 1 ELSE VANELI END) AS MONTO,
                SUM(CASE WHEN TIDO = 'NCV' THEN -1 * CAPRCO1 * PPPRPM ELSE CAPRCO1 * PPPRPM END) AS COSTO,
                SUM(CASE WHEN TIDO = 'NCV' THEN -1 * (VANELI - CAPRCO1 * PPPRPM) ELSE (VANELI - CAPRCO1 * PPPRPM) END) AS MARGEN"))
            -> whereIn ('MAEDDO.TIDO', ['FCV', 'BLV', 'NCV', 'FDV'])
            -> where ('MAEDDO.NUDO', 'NOT LIKE', 'F%')
            -> where ('MAEDDO.NUDO', 'NOT LIKE', 'B%')
            -> whereRaw("(MAEDDO.FEEMLI BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
            -> groupBy('TABMR.NOKOMR')
            -> orderby('MONTO', 'desc')
            -> get();
        
        return $sql;
    }

    public function ventaAreas($fechaInicial, $fechaFinal)
    {
        $sql = Maeddo::join('MAEPR', 'MAEDDO.KOPRCT', 'MAEPR.KOPR')
            -> join('TABFU', 'MAEPR.KOFUPR', 'TABFU.KOFU')
            -> select(\DB::raw("TABFU.NOKOFU AS TIPO,
                COUNT (DISTINCT MAEDDO.NUDO) AS CANTIDAD,
                SUM(CASE WHEN TIDO = 'NCV' THEN VANELI * - 1 ELSE VANELI END) AS MONTO,
                SUM(CASE WHEN TIDO = 'NCV' THEN -1 * CAPRCO1 * PPPRPM ELSE CAPRCO1 * PPPRPM END) AS COSTO,
                SUM(CASE WHEN TIDO = 'NCV' THEN -1 * (VANELI - CAPRCO1 * PPPRPM) ELSE (VANELI - CAPRCO1 * PPPRPM) END) AS MARGEN"))
            -> whereIn ('MAEDDO.TIDO', ['FCV', 'BLV', 'NCV', 'FDV'])
            -> where ('MAEDDO.NUDO', 'NOT LIKE', 'F%')
            -> where ('MAEDDO.NUDO', 'NOT LIKE', 'B%')
            -> whereRaw("(MAEDDO.FEEMLI BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
            -> groupBy('TABFU.NOKOFU')
            -> orderby('MONTO', 'desc')
            -> get();
        
        return $sql;
    }

    public function saleLocalProduct($fechaInicial, $fechaFinal)
    {
        $sql = Maeddo::join('TABSU', 'MAEDDO.SULIDO', 'TABSU.KOSU')
        -> join('MAEPR', 'MAEDDO.KOPRCT', 'MAEPR.KOPR')
        -> select(\DB::raw("TABSU.NOKOSU AS TIPO,
            COUNT (DISTINCT MAEDDO.NUDO) AS CANTIDAD,
            SUM(CASE WHEN TIDO = 'NCV' THEN VANELI * - 1 ELSE VANELI END) AS MONTO,
            SUM(CASE WHEN TIDO = 'NCV' THEN -1 * CAPRCO1 * PPPRPM ELSE CAPRCO1 * PPPRPM END) AS COSTO,
            SUM(CASE WHEN TIDO = 'NCV' THEN -1 * (VANELI - CAPRCO1 * PPPRPM) ELSE (VANELI - CAPRCO1 * PPPRPM) END) AS MARGEN"))
        -> whereIn ('MAEDDO.TIDO', ['FCV', 'BLV', 'NCV', 'FDV'])
        -> where ('MAEDDO.NUDO', 'NOT LIKE', 'F%')
        -> where ('MAEDDO.NUDO', 'NOT LIKE', 'B%')
        -> whereRaw("(MAEDDO.FEEMLI BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
        -> groupBy('TABSU.NOKOSU')
        -> orderby('MONTO', 'desc')
        -> get();
        
        return $sql;
    }
	//BRIDGE
    public function saleLocal($fechaInicial, $fechaFinal)
    {
        $sql =  Maeedo::join('TABSU', 'MAEEDO.SUDO', 'TABSU.KOSU')
            -> select(\DB::raw("NOKOSU AS TIPO, 
                COUNT (DISTINCT MAEEDO.NUDO) AS CANTIDAD,
                SUM(CASE WHEN TIDO = 'NCV' THEN VANEDO * - 1 ELSE VANEDO END) AS MONTO"))
            -> whereIn ('MAEEDO.TIDO', ['FCV', 'BLV', 'NCV', 'FDV'])
            -> where ('MAEEDO.NUDO', 'NOT LIKE', 'F%')
            -> where ('MAEEDO.NUDO', 'NOT LIKE', 'B%')
            -> whereRaw("(MAEEDO.FEEMDO BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
            -> groupBy('TABSU.NOKOSU', 'MAEEDO.SUDO')
            -> get();

        return $sql;
    }


    public function ventaClientes($fechaInicial, $fechaFinal)
    {
        $sql = Maeedo::whereIn ('MAEEDO.TIDO', ['FCV', 'BLV', 'NCV', 'FDV'])
            -> selectRaw("COUNT (DISTINCT MAEEDO.NUDO) AS CANTIDAD, ENDO AS TIPO, SUM(CASE WHEN TIDO = 'NCV' THEN VANEDO * - 1 ELSE VANEDO END) AS MONTO")
            -> where ('MAEEDO.NUDO', 'NOT LIKE', 'F%')
            -> where ('MAEEDO.NUDO', 'NOT LIKE', 'B%')
            -> whereRaw("(MAEEDO.FEEMDO BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
            -> groupBy('MAEEDO.ENDO')
            -> get();
        
        return $sql;
    }

    public function ventaTiposPagos($fechaInicial, $fechaFinal)
    {
        $sql = Maedpce::selectRaw('COUNT (DISTINCT VAASDP) AS CANTIDAD, TIDP AS TIPO, SUM(VAASDP) AS MONTO')
            -> whereIn('TIDP', ['CHV', 'EFV', 'TJV', 'PAV', 'ncv', 'ncx', 'fcc', 'fdc', 'CPV', 'DEP', 'CRV', 'ATB'])
            -> whereRaw("(FEEMDP BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
            -> groupBy('TIDP')
            -> get();

        return $sql;
    }

    public function ventaCajas($fechaInicial, $fechaFinal)
    {
        $sql = Maedpcd::selectRaw('COUNT (DISTINCT MAEDPCD.VAASDP) AS CANTIDAD, MAEDPCE.CJREDP AS TIPO, SUM (MAEDPCD.VAASDP) AS MONTO')
            -> join('MAEDPCE', 'MAEDPCD.IDMAEDPCE', 'MAEDPCE.IDMAEDPCE')
            -> whereIn('TIDP', ['CHV', 'EFV', 'TJV', 'ncv'])
            -> whereRaw("(MAEDPCE.FEEMDP BETWEEN CONVERT(DATETIME, '".$fechaInicial."', 102) AND CONVERT(DATETIME, '". $fechaFinal."', 102))")
            -> groupBy('MAEDPCE.CJREDP', 'MAEDPCE.SUREDP')
            -> get();

        return $sql;
    }



}

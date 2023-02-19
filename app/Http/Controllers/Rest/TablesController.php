<?php
namespace App\Http\Controllers\Rest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Web\WebProduct;
use App\Models\Product\Product;
use App\Models\Product\ProductBrand;
use Illuminate\Support\Facades\DB;

class TablesController extends Controller
{
    public function product()
    {
        // CARGA DE PRODUCTOS DESDE RANDOM

        $dato = file_get_contents("http://164.77.188.108/api/index.php/Api/product");
        $data = json_decode($dato, true);
        
   //     DB::table('web_products')->delete();

   //     foreach($data as $item) {
               
    //            $product            = New WebProduct;
        //        $product->code      = $item['CODE'];
      //          $product->name      = $item['NAME'];
       //         $product->family    = $item['FAMILY'];
       //         $product->brand     = $item['BRAND'];
        //        $product->stock     = $item['STOCK'];
         //       $product->price     = $item['PRICE'];
          //      $product->unit      = $item['UNIT'];
          //      $product->save();
           // }

        $carga = WebProduct::get();
        
        echo "CARGA DE PRODUCTOS DESDE RANDOM LISTA " . $carga->count();

        $product = Product::get();

        foreach ($product as $item) {
       		$web_product = Webproduct::where('code', '=', $item->code)->first();
        	if (isset($web_product->code)) {
            	$web_product->image = $item->image; 
            	$web_product->comment = $item->comment; 
            	$web_product->save();
            	}
        	}

        $carga = WebProduct::where('image', '<>', '')->get();

        echo "<hr> CARGA DE IMAGENES " . $carga->count();

    }

    public function product_stock($CODE)
    {
        // CARGA DE PRODUCTOS DESDE RANDOM

        $dato = file_get_contents("http://164.77.188.108/api/index.php/Api/stock/".$CODE);
        $data = json_decode($dato, true);
        
     	return $data;
    }


   
}
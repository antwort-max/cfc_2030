<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\WebNavegation;
use App\Models\Web\WebMenu;
use App\Models\Web\WebAmbiance;
use App\Models\Web\WebProduct;
use App\Models\Product\ProductFamily;
use App\Models\Web\WebNotice;
use Illuminate\Http\Request;

class WebNavegationController extends Controller
{
    public function home()
    {
        $menu_first = WebMenu::where('menu', 'FIRST')->get();
        $menu_sales = WebMenu::where('menu', 'SALES')->get();
        $menu_links = WebMenu::where('menu', 'LINKS')->get();
        
        $product    = WebProduct::orderByRaw('RAND()')->limit(4)->get();
        $family     = ProductFamily::limit(6)->get();
        $ambiance   = WebAmbiance::get();
        $notice     = WebNotice::get();
        
        return view('web.front.welcome', compact('menu_first', 'menu_sales', 'menu_links', 'product', 'family', 'ambiance', 'notice'));
    }

    public function ambiance($ambiance)
    {
        $menu_first = WebMenu::where('menu', 'FIRST')->get();
        $menu_sales = WebMenu::where('menu', 'SALES')->get();
        $menu_links = WebMenu::where('menu', 'LINKS')->get();
        
        $product    = WebProduct::orderByRaw('RAND()')->limit(4)->get();
        $family     = ProductFamily::get();
        $ambiance   = WebAmbiance::findOrFail($ambiance);
        $notice     = WebNotice::get();

        return view('web.front.ambiance', compact('menu_first', 'menu_sales', 'menu_links', 'product', 'family', 'ambiance', 'notice'));
    }

    public function family($family)
    {
        $menu_first = WebMenu::where('menu', 'FIRST')->get();
        $menu_sales = WebMenu::where('menu', 'SALES')->get();
        $menu_links = WebMenu::where('menu', 'LINKS')->get();
        
        $product    = WebProduct::orderByRaw('RAND()')->limit(4)->get();
        $family     = ProductFamily::findOrFail($family);
        $notice     = WebNotice::get();

        return view('web.front.family', compact('menu_first', 'menu_sales', 'menu_links', 'product', 'family','notice'));
    }

    public function search(Request $request)
    {
        $menu_first = WebMenu::where('menu', 'FIRST')->get();
        $menu_sales = WebMenu::where('menu', 'SALES')->get();
        $menu_links = WebMenu::where('menu', 'LINKS')->get();
    
    	$search = $request->search;
        
        $product = WebProduct::where('code', 'LIKE', '%'.$search.'%')
            ->orWhere('name', 'LIKE', '%'.$search.'%')
            ->orWhere('comment', 'LIKE', '%'.$search.'%')
            ->orWhere('family', 'LIKE', '%'.$search.'%')
            ->orWhere('brand', 'LIKE', '%'.$search.'%')
            ->orderBy('stock', 'desc')->paginate(200);

        $family = ProductFamily::where('name', 'LIKE', '%'.$search.'%')->get();

        return view('web.front.product', compact('search', 'menu_first', 'menu_sales', 'menu_links', 'product', 'family'));
    }

	public function product($code)
    {
        $menu_first = WebMenu::where('menu', 'FIRST')->get();
        $menu_sales = WebMenu::where('menu', 'SALES')->get();
        $menu_links = WebMenu::where('menu', 'LINKS')->get();
        
        $product = WebProduct::where('code', '=', $code)->first();

        return view('web.front.kardex', compact('menu_first', 'menu_sales', 'menu_links', 'product'));
    }
   
}

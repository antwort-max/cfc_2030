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
        $family     = ProductFamily::get();
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

        return view('web.front.ambiance.welcome', compact('menu_first', 'menu_sales', 'menu_links', 'product', 'family', 'ambiance', 'notice'));
    }

    public function family($family)
    {
        $menu_first = WebMenu::where('menu', 'FIRST')->get();
        $menu_sales = WebMenu::where('menu', 'SALES')->get();
        $menu_links = WebMenu::where('menu', 'LINKS')->get();
        
        $product    = WebProduct::orderByRaw('RAND()')->limit(4)->get();
        $family     = ProductFamily::findOrFail($family);
        $notice     = WebNotice::get();

        return view('web.front.family.welcome', compact('menu_first', 'menu_sales', 'menu_links', 'product', 'family','notice'));
    }

    public function search(Request $request)
    {
        $menu_first = WebMenu::where('menu', 'FIRST')->get();
        $menu_sales = WebMenu::where('menu', 'SALES')->get();
        $menu_links = WebMenu::where('menu', 'LINKS')->get();
        
        $product = WebProduct::where('code', 'LIKE', '%'.$request->search.'%')
            ->orWhere('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('comment', 'LIKE', '%'.$request->search.'%')
            ->orWhere('family', 'LIKE', '%'.$request->search.'%')
            ->orWhere('brand', 'LIKE', '%'.$request->search.'%')
            ->paginate(20);

        $family = ProductFamily::where('name', 'LIKE', '%'.$request->search.'%')->get();
    	//$family_add = WebProduct::select('disctict family')::where('name', 'LIKE', '%'.$request->search.'%')->get();

        return view('web.front.product.welcome', compact('menu_first', 'menu_sales', 'menu_links', 'product', 'family'));
    }
   
}

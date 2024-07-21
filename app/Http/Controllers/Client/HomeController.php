<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{
    public function home()
    {
        $categories = DB::table('categories')->get();
        $product_is_show_home = DB::table('products')->where('status', 1)->where('is_show_home', 1)->orderBy('id', 'DESC')->limit(8)->get();
        $product_is_new = DB::table('products')->where('status', 1)->where('is_new', 1)->orderBy('id', 'DESC')->limit(8)->get();
        $product_is_sale = DB::table('products')->where('status', 1)->where('is_sale', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('client.home', compact('categories', 'product_is_show_home', 'product_is_new', 'product_is_sale'));
    }
}

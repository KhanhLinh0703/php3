<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function shop(Request $request, $category_id = null)
    {
        $categories = DB::table('categories')->get();
        $query = DB::table('products');
        $category_id = $request->category_id;
        if ($category_id) {
            $query->where('category_id', $category_id);
        }
        $minPrice = $request->minPrice;
        $maxPrice = $request->maxPrice;
        if ($minPrice) {
            $query->orderBy('price_sale', 'ASC');
        }
        if ($maxPrice) {
            $query->orderByDesc('price_sale');
        }
        $searchTerm = $request->input('search');
        if ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        }
        $products = $query->paginate(9);
        return view('client.shop', compact('categories', 'products','searchTerm', 'category_id', 'minPrice', 'maxPrice'));
    }
}

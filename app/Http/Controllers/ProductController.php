<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function index(Request $request) {      
   
    if ($request->filled('search')) {
        $searchQuery = $request->search;
        $products = Product::search($searchQuery)->paginate(10);
     
    } else {
         $searchQuery = '';
        $products = Product::paginate(10);
        
    }
    return view('product.search', [
        'products' => $products,
        'searchQuery' => $searchQuery,
    ]);
  }
}

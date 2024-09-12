<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Contracts\ProductSearchInterface;

class ProductController extends Controller
{
    protected $productSearch;

    public function __construct(ProductSearchInterface $productSearch)
    {
        $this->productSearch = $productSearch;
    }
   public function index(Request $request) 
    {      
       $searchQuery = $request->filled('search') ? $request->search : '';
        if ($searchQuery) {
            $products = $this->productSearch->search($searchQuery);
        } else {
            $products = $this->productSearch->search('');
        }
        return view('product.search', [
            'products' => $products,
            'searchQuery' => $searchQuery,
        ]);    
    }
}

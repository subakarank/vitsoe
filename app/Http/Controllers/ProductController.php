<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the value of the 'q' parameter from the request
        $query = $request->query('q');

        // Retrieve products ordered by code
        $productsQuery = Product::query()->orderBy('code');

        // Filter products based on name or code
        if ($query) {
            $productsQuery->where('name', 'like', '%' . $query . '%')
                          ->orWhere('code', 'like', '%' . $query . '%');
        }
        $products = $productsQuery->get();
        return response()->json($products);
    }
}

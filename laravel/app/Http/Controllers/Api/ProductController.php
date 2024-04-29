<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    // index is list of product
    public function index()
    {
        $productsQuery = Product::query();
        //check paramter limit
        $limit = optional(request())->input('limit', 4);
        //set max at 20
        $limit = min($limit, 4);
        $productsQuery->limit($limit);
        $products = $productsQuery->get();
        return [
            'data' => $products,
        ];
    }


    //detail of product
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json(['data' => $product]);
    }


    //store product
    public function store(ProductRequest $productRequest)
    {
        $productData = $productRequest->validated();
        $product = Product::create($productData);
        return response()->json(['data' => $product]);
    }
}

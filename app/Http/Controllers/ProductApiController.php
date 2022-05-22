<?php

namespace App\Http\Controllers;
use index;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductApiController;

class ProductApiController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $data = $products->map(function($product){
            return [
                'id'=> $product->id,
                'name'=> $product->name,
                'description'=> $product->description,
                'path'=> route('api.products.show', $product)
            ];
        });
        
        return response([
            'meta' => [
                'count' => $data->count(),
                'path' => route('api.products.index')],
            'data'=>$data
        ],201);
    }

    public function show(Product $product)
    {
        return response([
            'meta' => [
                'path' => route('api.products.show',$product)
            ],
            'data' => [
                    'name'=> $product->name,
                    'description'=> $product->description
            ]
        ],201);
    }
}

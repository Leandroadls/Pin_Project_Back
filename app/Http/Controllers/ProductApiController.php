<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductApiController;

class ProductApiController extends Controller
{

    public function index(){
        $products = Product::get()->toJson(JSON_PRETTY_PRINT);
        return response($products, 200);
    }

    public function show(Product $product){
        return [
            'meta' => [
                'path' => route('api.products.show',$product)
            ],
            'data' => [
                    'name'=> $product->name,
                    'description'=> $product->description
            ]
        ];
    }


}

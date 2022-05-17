<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductApiController;

class ProductApiController extends Controller
{
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

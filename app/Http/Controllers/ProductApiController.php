<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductApiController;

class ProductApiController extends Controller
{
    public function show(Producto $producto){
        return [
            'meta' => [
                'path' => route('api.productos.show',$producto)
            ],
            'data' => [
                    'name'=> $producto->name,
                    'description'=> $producto->description
            ]
        ];
    }
}

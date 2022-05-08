<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\MessageApiController;

class MessageApiController extends Controller
{
    public function store(){

        /*Valida los campos*/
        $validator = Validator::make(request()->all(),[
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'message'=> 'required'
        ]);

        /* RESPONDE SI HAY ERRORES*/
        if($validator->fails()){
            return response([
                'error' => true,
                'data' => $validator->errors()
            ],422);
        };

        /* CREA EL MENSAJE*/
        $message = Message::create([
            'name' => request() ->name,
            'email' => request() ->email,
            'phone' => request() ->phone,
            'message' => request() ->message
        ]);

        /* RESPONDE CON EL MENSAJE ENVIADO*/    
        return response([
            "meta" => [
                "mensaje" => "Your message has been sent successfully",
                "codigo" => 201
            ],
            'data' => $message
        ],201);
    }
}



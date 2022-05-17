<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Mail\MessageContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\MessageApiController;

class MessageApiController extends Controller
{
    public function store(){

        /*Validate the fields */
        $validator = Validator::make(request()->all(),[
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'message'=> 'required'
        ]);

        /* Error response */
        if($validator->fails()){
            return response([
                'error' => true,
                'data' => $validator->errors()
            ],422);
        };

        /* Create the message */
        $message = Message::create([
            'name' => request() ->name,
            'email' => request() ->email,
            'phone' => request() ->phone,
            'message' => request() ->message
        ]);

        /* Send the mail */

        Mail::to('leandrodls@gmail.com')->send(new MessageContact($message));

        /* Success message */    
        return response([
            "meta" => [
                "mensaje" => "Your message has been sent successfully",
                "codigo" => 201
            ],
            'data' => [
                'name'=> $message->name,
                'email'=> $message->email,
                'phone'=> $message->phone,
                'message'=> $message->message
            ]
        ],201);
    }
}



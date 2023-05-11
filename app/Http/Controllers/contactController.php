<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function store(){
        $mail=request()->validate([
            "name" => 'required',
            "email" => 'required|email',
            "subject" => 'required | min:5',
            "content" => 'required | min:5 | max:255'
        ]);

        //send mail

        Mail::to('ponchovillegastercero@gmail.com')->queue(new MessageRecived($mail));
    }
}

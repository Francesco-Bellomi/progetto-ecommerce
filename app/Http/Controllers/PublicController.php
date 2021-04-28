<?php

namespace App\Http\Controllers;

use App\Mail\WorkWithUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function lavoraconnoi(){
        return view('lavoraconnoi');
    }
    public function submit(Request $request){

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $contact= compact('name' , 'message');

        Mail::to($email)->send(new WorkWithUsMail($contact));

        return redirect(route('homepage'))->with('message' , 'La tua Richiesta è stata inoltrata , verrai ricontattato al più presto');

    }
}

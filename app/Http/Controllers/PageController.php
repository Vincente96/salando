<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function contact (){
        return view('contact');
    }
    
    public function sendEmail(Request $request){
        
        $data = [
            "nome"=> $request -> nome,
            "telefono" => $request -> telefono,
            "mail" => $request -> mail,
            "messagio" => $request -> messaggio
        ];  
        
        Mail::to('info@email.it')->send(new InfoMail($data));
        return redirect() -> route('thank-you');
    }
    public function thankyou () {
        return view('grazie');
    }
}

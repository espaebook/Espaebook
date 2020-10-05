<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    
    public function contact(){
        
        $datos = Request();
        Mail::to('enriquehtm@gmail.com')->send(new DemoEmail($datos));
        return trans('welcome.Sent');
    }
}
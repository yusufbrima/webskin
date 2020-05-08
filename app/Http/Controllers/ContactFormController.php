<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //

    public function SendMessage($request){
    	return redirect('/')->with('success','Mail sent successfully. Thank you!');
    }
}

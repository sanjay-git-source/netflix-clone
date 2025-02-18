<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   
    public function contact(){
        return view('contact.contact');
    }
    public function submitcontactForm(Request $request){

        $request->validate([
            'name'=>'required|',
            'email'=>'required|email',
            'subject'=>'required|min:10',
            'message'=>'required|min:10'

        ]);

       // dd($request->all()); to find values are coming

       $data=$request->all();
        
       Contact::create($data);


       return redirect()->route('contactform')->with('status','Your Message Has Been Sent Successfully.');

    }


}

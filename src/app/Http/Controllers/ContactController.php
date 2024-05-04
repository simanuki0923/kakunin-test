<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller

{
   public function index()
  {
   return view('index');
  }


 public function confirm(Request $request)
  {
   
   $contact = $request->only(['last_name', 'first_name',  'gender1', 'gender2', 'gender3', 'email', 'tel_first', 'tel_second', 'tel_third', 'street-address', 'street-address2', 'content1', 'content2', 'content3', 'textarea']);
   return view('confirm', ['contact' => $contact]);
  }


    public function edit()
    {
        
  
// お問い合わせフォームのビューを返す
        
     
return view('contact_form');
    }

}









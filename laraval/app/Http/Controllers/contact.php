<?php

namespace App\Http\Controllers;

use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Contact extends Controller
{
    //
   public function contactdatas(Request $request){
    $table=new \App\Models\Contact;
    $table->name=$request->name;
    $table->email=$request->email;
    $table->subject=$request->subject;
    $table->message=$request->message;
    $table->save();
    return redirect()->back();
   }
 } 
